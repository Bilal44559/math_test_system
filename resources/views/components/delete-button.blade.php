@props([
    'formAction',
    'buttonClass' => 'text-danger',
    'iconClass' => 'fas fa-trash',
])

<form action="{{ $formAction }}" method="POST" class="d-inline delete-form">
    @csrf
    @method('DELETE')
    <button type="button" class="border-0 bg-transparent {{ $buttonClass }} show-confirm" title="Delete">
        <i class="{{ $iconClass }}"></i>
    </button>
</form>
