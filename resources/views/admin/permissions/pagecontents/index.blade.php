@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-lg-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">All Page Contents</h5>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto">
                    <a href="{{ route('admin.pagecontents.create') }}" class="btn btn-theme-secondary btn-sm mb-0">
                        + &nbsp; Add Page Content
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pb-0">
                @include('components.alert')
            </div>
            <div class="card-body px-0 pb-0">
                <div class="table-responsive">
                    <table class="table table-flush" id="pagecontents-list">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>SubCategory</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Paragraphs</th>
                                <th>Bullet Points</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pagecontents as $content)
                            <tr>
                                <td class="text-sm font-weight-bold">{{ $content->id }}</td>
                                <td class="text-sm">{{ $content->subcategory->name ?? 'N/A' }}</td>
                                <td class="text-sm font-weight-bold">{{ $content->title ?? '-' }}</td>
                                <td class="text-sm">{{ $content->sub_title ?? '-' }}</td>
                                <td class="text-sm">{!! Str::limit(strip_tags($content->paragraphs), 50) !!}</td>
                                <td class="text-sm">
                                    @if (is_array($content->bullet_points))
                                    <ul>
                                        @foreach ($content->bullet_points as $point)
                                        <li>{{ $point }}</li>
                                        @endforeach
                                    </ul>
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>
                                    @if ($content->images)
                                    <img src="{{ asset($content->images) }}" alt="Image"
                                        style="width: 50px; height: auto; border-radius: 5px; margin-right: 5px;">
                                    @else
                                    <span class="text-muted">No Images</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.pagecontents.edit', $content->id) }}"
                                        data-bs-toggle="tooltip" title="Edit">
                                        <i class="fas fa-edit text-secondary me-2"></i>
                                    </a>

                                    <x-delete-button :form-action="route('admin.pagecontents.destroy', $content->id)"
                                        button-class="text-danger me-2" icon-class="fas fa-trash" />
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection