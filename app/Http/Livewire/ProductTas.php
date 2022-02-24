<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductTas extends Component
{
    use WithPagination;

    public $search, $productcategory;

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function mount($productcategoryId)
    {
        $productcategoryDetail = ProductCategory::find($productcategoryId);

        if($productcategoryDetail) {
            $this->productcategory = $productcategoryDetail;
        }
    }

    public function render()
    {
        if($this->search) {
            $products = Product::where('product_categories_id', $this->productcategory->id)->where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else{
            $products = Product::where('product_categories_id', $this->productcategory->id)->paginate(8);
        }
        return view('livewire.product-index', [
            'products' => $products
        ])->extends('layouts.app')
        ->section('content');
    }
}
