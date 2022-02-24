<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    protected $paginationTheme = 'bootstrap';
    
    public function mount()
    {
        $this->search = request()->query('search', '');
    }

    public function render()
    {
        if($this->search) {
            $products = Product::where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else{
            $products = Product::paginate(8);
        }
        
        return view('livewire.product-index', [
            'products' => $products
        ])->extends('layouts.app')
        ->section('content');
        
    }
}
