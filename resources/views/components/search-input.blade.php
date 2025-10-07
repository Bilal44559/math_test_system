<div class="mb-4">
    <form method="GET" action="{{ url()->current() }}">
        <div class="input-group">
            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Search..."
                value="{{ request('search') }}"
            >
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
</div>
