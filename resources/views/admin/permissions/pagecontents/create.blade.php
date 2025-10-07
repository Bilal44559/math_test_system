@extends('layouts.app')

@section('content')
<div class="row my-5">
    <div class="col-lg-12">
        <h5 class="font-weight-bolder mb-3">Create Page Content</h5>
        <div class="card p-3 border-radius-xl bg-white">
            <div class="multisteps-form__content">
                <form method="POST" action="{{ route('admin.pagecontents.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <label for="sub_category_id">Sub Category</label>
                            <select name="sub_category_id" id="sub_category_id" class="form-select">
                                <option value="">-- Select Sub Category --</option>
                                @foreach ($sub_categories as $sub_category)
                                <option value="{{ $sub_category->id }}"
                                    {{ old('sub_category_id') == $sub_category->id ? 'selected' : '' }}>
                                    {{ $sub_category->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('sub_category_id') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>
                        <div class="col-sm-6">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                            @error('title') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <label>Sub Title</label>
                            <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title') }}">
                            @error('sub_title') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>

                        <div class="col-sm-6">
                            <label>Bullet Points (Add multiple bullet points)</label>
                            <div id="bullet-points-wrapper">
                                <div class="input-group mb-2 bullet-point-row">
                                    <input type="text" name="bullet_points[]" class="form-control"
                                        placeholder="Bullet Point 1" value="{{ old('bullet_points.0') }}">
                                    <button type="button" class="btn btn-outline-danger btn-remove-bullet"
                                        style="display:none;">&times;</button>
                                </div>
                                @if(old('bullet_points'))
                                @foreach(old('bullet_points') as $i => $bp)
                                @if($i > 0)
                                <div class="input-group mb-2 bullet-point-row">
                                    <input type="text" name="bullet_points[]" class="form-control"
                                        placeholder="Bullet Point {{ $i + 1 }}" value="{{ $bp }}">
                                    <button type="button"
                                        class="btn btn-outline-danger btn-remove-bullet">&times;</button>
                                </div>
                                @endif
                                @endforeach
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
                            <textarea name="paragraphs" class="form-control" rows="5">{{ old('paragraphs') }}</textarea>
                            @error('paragraphs') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <label>Upload Image</label>
                            <input type="file" name="images" class="form-control">
                            @error('images') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                            @error('images.*') <p class="text-danger text-sm">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="form-group mt-4 text-end">
                        <button type="submit" class="btn btn-theme-secondary">Create Page Content</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function updatePlaceholders() {
    const inputs = document.querySelectorAll('#bullet-points-wrapper input[name="bullet_points[]"]');
    inputs.forEach((input, idx) => {
        input.placeholder = 'Bullet Point ' + (idx + 1);
    });
}

document.getElementById('add-bullet-point').addEventListener('click', function() {
    const wrapper = document.getElementById('bullet-points-wrapper');
    const count = wrapper.querySelectorAll('input[name="bullet_points[]"]').length + 1;

    const div = document.createElement('div');
    div.classList.add('input-group', 'mb-2', 'bullet-point-row');

    const input = document.createElement('input');
    input.type = 'text';
    input.name = 'bullet_points[]';
    input.className = 'form-control';
    input.placeholder = 'Bullet Point ' + count;

    const removeBtn = document.createElement('button');
    removeBtn.type = 'button';
    removeBtn.className = 'btn btn-outline-danger btn-remove-bullet';
    removeBtn.innerHTML = '&times;';

    removeBtn.addEventListener('click', function() {
        div.remove();
        updatePlaceholders();
        toggleRemoveButtons();
    });

    div.appendChild(input);
    div.appendChild(removeBtn);

    wrapper.appendChild(div);

    updatePlaceholders();
    toggleRemoveButtons();
});

function toggleRemoveButtons() {
    const rows = document.querySelectorAll('.bullet-point-row');
    rows.forEach((row, idx) => {
        const btn = row.querySelector('.btn-remove-bullet');
        if (rows.length > 1) {
            btn.style.display = 'inline-block';
        } else {
            btn.style.display = 'none';
        }
    });
}

// Remove buttons on page load (for old inputs)
document.querySelectorAll('.btn-remove-bullet').forEach(btn => {
    btn.addEventListener('click', function() {
        btn.closest('.bullet-point-row').remove();
        updatePlaceholders();
        toggleRemoveButtons();
    });
});

toggleRemoveButtons();
</script>
@endsection