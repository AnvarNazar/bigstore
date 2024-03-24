<div>
    @if (session()->has('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
    <nav>
        <a href="{{ route('admin.skus.create') }}" wire:navigate>Create SKU</a>
    </nav>
</div>
