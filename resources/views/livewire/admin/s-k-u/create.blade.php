<div>
    <h1>Create SKU</h1>
    <form wire:submit="save">
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" wire:model="name" max="60"/>
        </div>
        <div>
            @error('name') <span>{{ $message }}</span> @enderror
        </div>
        <button type="submit">Save</button>
    </form>
</div>
