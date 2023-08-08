@extends('front.layouts.index')

@section('content')
    <section class="products" id="products" data-aos="fade-up" data-aos-duration="2000">
        <h2 style="text-transform: uppercase; font-family: serif">
            {{ $frontPost->title }}</h2>

        <div class="row">
            {{-- <div class="product-card"> --}}

            <div class="product-image" style="text-align: center">
                {{-- @if ($frontPost->image) --}}
                <div style="max-width: 100%; overflow:hidden">
                    <img src="{{ asset('storage/' . $frontPost->image) }}">
                </div>
            </div>
            <div class="product-content ">

                <h4>{!! nl2br(e($frontPost->description)) !!}<br></h4>

            </div>


            {{-- </div> --}}
        </div>
    </section>
@endsection
