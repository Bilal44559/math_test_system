<?php

namespace App\Services;

use App\Models\Membership;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class MembershipService
{
    public function getAllMemberships()
    {
        $memberships = Membership::with('features')->get();

        return $memberships->isEmpty() ? null : $memberships;
    }

    public function createMembership(array $data)
    {
        $membership = Membership::create([
            // 'user_id' => Auth::user()->id,
            'user_id' => 1,
            'name' => $data['name'],
            'type' => $data['type'],
            'monthly_price' => $data['monthly_price'] ?? null,
            'annual_price' => $data['annual_price'] ?? null,
            'monthly_discount' => $data['monthly_discount'] ?? null,
            'annual_discount' => $data['annual_discount'] ?? null,
            'image' => $data['image'] ?? null,
            'status' => 1,
        ]);

        if (!empty($data['features']) && is_array($data['features'])) {
            foreach ($data['features'] as $feature) {
                $membership->features()->create(['feature' => $feature]);
            }
        }

        return $membership->load('features');
    }

    public function getMembershipByType($type)
    {
        return Membership::with('features')->where('type', $type)->first();
    }



    public function updateMembership($id, array $data)
    {
        $membership = Membership::with('features')->find($id);

        if (!$membership) {
            return null;
        }

        // If new image is uploaded, delete the old one
        if (!empty($data['image']) && $membership->image) {
            Storage::disk('public')->delete($membership->image);
        }

        $membership->update([
            'name' => $data['name'],
            'type' => $data['type'],
            'monthly_price' => $data['monthly_price'] ?? null,
            'annual_price' => $data['annual_price'] ?? null,
            'monthly_discount' => $data['monthly_discount'] ?? null,
            'annual_discount' => $data['annual_discount'] ?? null,
            'image' => $data['image'] ?? $membership->image,
        ]);

        // Delete old features and insert new ones
        $membership->features()->delete();
        if (!empty($data['features']) && is_array($data['features'])) {
            foreach ($data['features'] as $feature) {
                $membership->features()->create(['feature' => $feature]);
            }
        }

        return $membership->load('features');
    }

    public function deleteMembership($id)
    {
        $membership = Membership::find($id);

        if (!$membership) {
            return false;
        }

        // Delete image from storage
        if ($membership->image) {
            Storage::disk('public')->delete($membership->image);
        }

        // Delete related features
        $membership->features()->delete();

        return $membership->delete();
    }
}
