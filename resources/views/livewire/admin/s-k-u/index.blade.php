<div>
    @if (session()->has('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
    <nav>
        <a href="{{ route('admin.skus.create') }}" wire:navigate>Create SKU</a>
    </nav>
    <ul>
    @forelse ($skus as $sku)
        <li>{{ $sku->name }}</li>
    @empty
        <strong>No SKUs</strong>
    @endforelse
    </ul>
</div>
