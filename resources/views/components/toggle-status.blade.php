@props(['status', 'route'])

<style>
    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 26px;
    }

    .toggle-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .toggle-slider {
        position: absolute;
        cursor: pointer;
        top: 0; left: 0;
        right: 0; bottom: 0;
        background-color: #dc3545;
        transition: .4s;
        border-radius: 34px;
    }

    .toggle-slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    input:checked + .toggle-slider {
        background-color: #28a745;
    }

    input:checked + .toggle-slider:before {
        transform: translateX(24px);
    }
</style>

<label class="toggle-switch">
    <input type="checkbox"
           class="toggle-status-switch"
           data-url="{{ $route }}"
           {{ $status ? 'checked' : '' }}>
    <span class="toggle-slider"></span>
</label>

@once
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('change', function (e) {
                if (e.target && e.target.classList.contains('toggle-status-switch')) {
                    const checkbox = e.target;
                    const url = checkbox.getAttribute('data-url');
                    const checked = checkbox.checked;

                    Swal.fire({
                        title: 'Are you sure?',
                        text: `Do you want to ${checked ? 'activate' : 'deactivate'} this item?`,
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'Cancel',
                        confirmButtonColor: '#198754',
                        cancelButtonColor: '#dc3545',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch(url, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                    'Accept': 'application/json'
                                },
                            })
                            .then(res => res.json())
                            .then(data => {
                                if (data.success) {
                                    Swal.fire('Updated!', 'Status has been updated.', 'success');
                                } else {
                                    Swal.fire('Error', data.message || 'Update failed.', 'error');
                                    checkbox.checked = !checked;
                                }
                            })
                            .catch(error => {
                                Swal.fire('Error', 'Request failed.', 'error');
                                checkbox.checked = !checked;
                            });
                        } else {
                            checkbox.checked = !checked;
                        }
                    });
                }
            });
        </script>
    @endpush
@endonce
