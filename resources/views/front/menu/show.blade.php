@extends('front.layouts.index')

@section('content')
    <section class="products" id="products" data-aos="fade-up" data-aos-duration="2000">
        <h2 style="text-transform: uppercase">{{ $frontMenu->title }}</h2>

        <div class="row">
            {{-- <div class="product-card"> --}}

            <div class="product-image" style="text-align: center">
                {{-- @if ($frontMenu->image) --}}
                <div style="max-height: 100%; overflow:hidden">
                    <img src="{{ asset('storage/' . $frontMenu->image) }}">
                </div>
            </div>
            <div class="product-content ">
                <br>
                <h4>{{ $frontMenu->description }}</h4>
                <br>
                @if ($frontMenu->harga == 0)
                    <h4></h4>
                @else
                    <h4 style="color:cornflowerblue">Harga Tiket Rp {{ number_format($frontMenu->harga) }}</>
                @endif
                {{-- <div class="product-price">IDR 30K <span>IDR 55K</span></div> --}}
            </div>


            {{-- </div> --}}
        </div>
    </section>
@endsection
