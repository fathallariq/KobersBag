{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    
    {{-- BANNER --}}
    <div class="banner mt-4">
        <img src="{{ url('assets/slider/slider.png') }}" alt="">
    </div>

    {{-- Pilih Product Category --}}
    <section class="productcategory mt-4">
        <h3><strong>Pilih Jenis Tas</strong></h3>
        <div class="row mt-4">
            @foreach($productcategories as $productcategory)
            <div class="col">
                <div class="card shadow">
                    <div class="card-body text-center">
                      <img src="{{ url('assets/productcategory') }}/{{ $productcategory->gambar}}" class="img-fluid">
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- Best Product --}}
    <section class="products mt-5 mb-5">
        <h3>
           <strong>Produk Terbaik</strong>
            <a href="{{ route('products')}}" class="btn btn-dark float-right"><i class="fas fa-eye">Lihat Semua</i></a>
         </h3>
        <div class="row mt-4">
           @foreach($products as $product)
           <div class="col">
              <div class="card">
                 <div class="card-body text-center">
                    <img src="{{ url('assets/tas') }}/{{ $product->gambar }}" class="img-fluid">
                    <div class="row mt-2">
                       <div class="col-md-12">
                          <h5><strong>{{ $product->nama }}</strong> </h5>
                          <h5>Rp. {{ number_format($product->harga) }}</h5>
                       </div>
                    </div>
                    <div class="row mt-2">
                       <div class="col-md-12">
                          <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye">Detail</i></a>
                       </div>
                    </div>
                 </div>
               </div>
           </div>
           @endforeach
        </div>
     </section>
</div>
{{-- @endsection --}}