@extends('layouts.app')

@section('content')
<div class="row my-5">
    <div class="col-lg-12">
        <h5 class="font-weight-bolder mb-3">Edit Page Content</h5>
        <div class="card p-3 border-radius-xl bg-white">
            <div class="multisteps-form__content">
                <form method="POST" action="{{ route('admin.pagecontents.update', $pagecontent->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <label>SubCategory <span class="text-danger">*</span></label>
                            <select class="form-control" name="sub_category_id" required>
                                <option value="">Select SubCategory</option>
                                @foreach ($sub_categories as $subcat)
                                <option value="{{ $subcat->id }}"
                                    {{ (old('sub_category_id', $pagecontent->sub_category_id) == $subcat->id) ? 'selected' : '' }}>
                                    {{ $subcat->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('sub_category_id') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>

                        <div class="col-sm-6">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control"
                                value="{{ old('title', $pagecontent->title) }}">
                            @error('title') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <label>Sub Title</label>
                            <input type="text" name="sub_title" class="form-control"
                                value="{{ old('sub_title', $pagecontent->sub_title) }}">
                            @error('sub_title') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>

                        <div class="col-sm-6">
                            <label>Bullet Points (Add multiple bullet points)</label>
                            <div id="bullet-points-wrapper">
                                @php
                                $oldBulletPoints = old('bullet_points', $pagecontent->bullet_points ?? []);
                                @endphp
                                @if (is_array($oldBulletPoints) && count($oldBulletPoints) > 0)
                                @foreach ($oldBulletPoints as $idx => $point)
                                <input type="text" name="bullet_points[]" class="form-control mb-2" value="{{ $point }}"
                                    placeholder="Bullet Point {{ $idx + 1 }}">
                                @endforeach
                                @else
                                <input type="text" name="bullet_points[]" class="form-control mb-2"
                                    placeholder="Bullet Point 1">
                                @endif
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary" id="add-bullet-point">+ Add
                                Bullet Point</button>
                            @error('bullet_points') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <label>Paragraphs</label>
                            <textarea name="paragraphs" class="form-control"
                                rows="5">{{ old('paragraphs', $pagecontent->paragraphs) }}</textarea>
                            @error('paragraphs') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <label>Existing Images</label>
                            <div>
                                @if ($pagecontent->images)
                                <img src="{{ asset($pagecontent->images) }}" alt="Image"
                                    style="width: 50px; height: auto; border-radius: 5px; margin-right: 5px;">
                                @else
                                <span class="text-muted">No Images</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <label>Upload New Images</label>
                            <input type="file" name="images" class="form-control">
                            @error('images') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group mt-4 text-end">
                        <button type="submit" class="btn btn-theme-primary">Update Page Content</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('add-bullet-point').addEventListener('click', function() {
    const wrapper = document.getElementById('bullet-points-wrapper');
    const count = wrapper.querySelectorAll('input').length + 1;
    const input = document.createElement('input');
    input.type = 'text';
    input.name = 'bullet_points[]';
    input.className = 'form-control mb-2';
    input.placeholder = 'Bullet Point ' + count;
    wrapper.appendChild(input);
});
</script>
@endsection