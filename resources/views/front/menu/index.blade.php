@extends('front.layouts.index')

@section('content')
    <section class="products" id="products">
        <div data-aos="fade-down" data-aos-duration="2000">
            <h2>List <span>Wahana </span></h2>
        </div>
        <div class="row">

            @foreach ($menu as $menus)
                <div class="product-card" style="border: 0px solid #78a8e7" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="product-icons">
                        {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                        {{-- <a href="#" class="item-detail-button"><i data-feather="eye"></i></a> --}}
                    </div>
                    <div class="product-image">
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ asset('storage/' . $menus->image) }}" class="img-fluid mt-3">
                        </div>
                    </div>

                    <div class="product-content">
                        <h3 style="text-transform:capitalize"><a style="color: white"
                                href="/frontmenu/{{ $menus->id }}">{{ $menus->title }}</a>
                        </h3>
                        {{-- <h4>{{ $menus->description }}</h4> --}}
                        {{-- <div class="product-price">IDR 30K <span>IDR 55K</span></div> --}}
                    </div>


                </div>
            @endforeach
        </div>
        <div style="margin-top:40px">
            {!! $menu->render() !!}
        </div>
    </section>
@endsection
