<?php

namespace App\Livewire\Admin\SKU;

use App\Models\SKU;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $skus = [];

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $this->skus = SKU::all();
        return view('livewire.admin.s-k-u.index');
    }
}
