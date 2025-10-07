@if (session('success'))
    <x-alert-message type="success" :message="session('success')" />
@endif

@if (session('error'))
    <x-alert-message type="error" :message="session('error')" />
@endif

@if (session('warning'))
    <x-alert-message type="warning" :message="session('warning')" />
@endif

@if (session('info'))
    <x-alert-message type="info" :message="session('info')" />
@endif
