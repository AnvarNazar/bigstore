<?php

namespace App\Livewire\Admin\SKU;

use App\Models\SKU;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required')]
    public $name = '';

    public function save()
    {
        $this->validate();
        SKU::create($this->only(['name']));
        session()->flash('status', 'SKU created.');
        return redirect()->route('admin.skus.index');
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.s-k-u.create');
    }
}
