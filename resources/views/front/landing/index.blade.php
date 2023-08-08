@extends('front.layouts.index')

@section('content')
    <section class="hero" id="home">
        <!-- <main class="content"> -->
        <video class="" style="max-width: 100%" style="max-height: 100%" muted="true" loop="true" autoplay="true"
            data-aos="fade-right" data-aos-duration="2000">
            <source src="../assets/video/profile.mp4" type="video/mp4" />
        </video>

        {{-- <video src="../assets/video/profile.mp4"></video> --}}
        {{-- <div class="slider">
            <div id="carousel" class="slide"></div>
            <div id="carousel" class="slide"></div>
            <div id="carousel" class="slide"></div>

        </div> --}}
        <!-- </main> -->
    </section>
    {{-- <section class="products" id="products">
        <h2>Berita <span>Terbaru</span></h2>
        
        <div class="col">
            <div class="product-card">

                @foreach ($post as $itemPost)
                    <div class="product-icons" style="margin-bottom: 30px">

                    </div>
                    <div class="product-content">
                        <a style="color: white" href="/frontpost/{{ $itemPost->id }}">
                            <h3>{{ $itemPost->title ?? '' }}</h3>
                        </a>

                    </div>

                    <div class="product-image" style="border-radius: 30%">
                        @if (@empty($itemPost->image))
                            <img
                                src="https://plus.unsplash.com/premium_photo-1682390303849-9cf52609ce82?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"class="card-img-top">
                        @else
                            <div style="max-height: 350px; overflow:hidden" style="border-radius: 20%">
                                <img src="{{ asset('storage/' . $itemPost->image) }}" class="img-fluid mt-3">
                            </div>
                        @endif
                    </div>
                    <div>{{ \Illuminate\Support\Str::limit(strip_tags($itemPost->description), 70) }}
                        @if (strlen(strip_tags($itemPost->description)) > 70)
                            ... <a style="color:cornflowerblue" href="/frontpost/{{ $itemPost->id }}">Readmore</a>
                        @endif
                    </div>

                    <br>
                @endforeach

            </div>

        </div>
        <br>
        <div>
            <a style="color: white" href="/post">
                <h1 style="text-align: center">Watch more........</h1><a>
        </div>
    </section> --}}
    <section class="products" id="products">
        <div data-aos="fade-right" data-aos-duration="2000">
            <h2>Berita <span>Terbaru </span></h2>
        </div>

        <div class="row">

            @foreach ($post as $itemPost)
                <div style="border:0" class="product-card" data-aos="zoom-in" data-aos-duration="2000">

                    <div style="text-align: start" class="product-image" style="border-radius: 30%">
                        @if (@empty($itemPost->image))
                            <img
                                src="https://plus.unsplash.com/premium_photo-1682390303849-9cf52609ce82?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"class="card-img-top">
                        @else
                            <div style="max-height: 100%;" style="max-width: 100%" style="border-radius: 20%">
                                <img src="{{ asset('storage/' . $itemPost->image) }}" class="card-img-top">
                            </div>
                        @endif
                    </div>

                    <div style="text-align: start" class="product-content">
                        <a style="color: white" href="/frontpost/{{ $itemPost->id }}">
                            <h3 style="text-transform: capitalize">{{ $itemPost->title }}</h3>
                        </a>

                    </div>
                    <div style="text-align: start">
                        {{ ucfirst(\Illuminate\Support\Str::limit(strip_tags($itemPost->description), 70)) }}
                        @if (strlen(strip_tags($itemPost->description)) > 70)
                            ... <a style="color:cornflowerblue" href="/frontpost/{{ $itemPost->id }}">Readmore</a>
                        @endif
                    </div>


                </div>
            @endforeach
        </div>
        <div data-aos="zoom-in" data-aos-duration="2000">
            <a style="color: white" href="/post">
                {{-- <h1 style="text-align: center">Watch more........</h1><a> --}}
                <h2>Watch <span> More</span></h2>
            </a>
        </div>
    </section>
    <section class="products" id="products">
        <div data-aos="fade-right" data-aos-duration="2000">
            <h2>List <span> Wahana</span></h2>
            <p>List Wahana yang ada di Telaga pelemwatu</p>
        </div>

        <div class="row">
            {{-- @foreach ($menu as $menus) --}}
            <div class="product-card" style="border: 0px solid #78a8e7" data-aos="fade-right" data-aos-duration="2000">
                <div class="product-icons">
                    {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                    {{-- <a href="#" class="item-detail-button"><i data-feather="eye"></i></a> --}}
                </div>
                <div class="product-image">
                    @if (@empty($menu[0]->image))
                        <img
                            src="https://plus.unsplash.com/premium_photo-1682390303849-9cf52609ce82?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"class="card-img-top">
                    @else
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ asset('storage/' . $menu[0]->image) }}" class="img-fluid mt-3">
                        </div>
                    @endif

                </div>

                <div class="product-content">
                    <h3 style="text-transform: capitalize">{{ $menu[0]->title ?? '' }}</h3>
                    {{-- <h4>Rp. {{ number_format($menu[0]->harga ?? '') }}</h4> --}}
                    <br>
                    {{-- <h4 id="citeText">{{ $menu[0]->description ?? '' }}</h4> --}}
                    {{-- <div class="product-price">IDR 30K <span>IDR 55K</span></div> --}}
                </div>


            </div>
            <div class="product-card" style="border: 0px solid #78a8e7" data-aos="fade-right" data-aos-duration="3000">
                <div class="product-icons">
                    {{-- <a href="#"><i data-feather="shopping-cart"></i></a> --}}
                    {{-- <a href="#" class="item-detail-button"><i data-feather="eye"></i></a> --}}
                </div>
                <div class="product-image">
                    @if (@empty($menu[1]->image))
                        <img
                            src="https://plus.unsplash.com/premium_photo-1682390303849-9cf52609ce82?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"class="card-img-top">
                    @else
                        <div style="max-height: 350px; overflow:hidden" style="max-width: 100%">
                            <img src="{{ asset('storage/' . $menu[1]->image) }}" class="img-fluid mt-3">
                        </div>
                    @endif

                </div>

                <div class="product-content">
                    <a style="color: white" href="/frontmenu/{{ $menu[1]->id }}">
                        <h3 style="text-transform: capitalize">{{ $menu[1]->title ?? '' }}</h3>
                    </a>
                    {{-- <h4>{{ $menu[1]->description ?? '' }}</h4> --}}
                    {{-- <div class="product-price">IDR 30K <span>IDR 55K</span></div> --}}
                </div>


            </div>

            {{-- @endforeach --}}
        </div>
        <br>
        <div data-aos="zoom-in" data-aos-duration="2000">
            <a style="color: white" href="/menu">
                {{-- <h1 style="text-align: center">Watch more........</h1><a> --}}
                <h2>Watch <span> More</span></h2>
            </a>
        </div>

    </section>
    <section id="contact" class="contact" data-aos="zoom-in" data-aos-duration="2000">
        <h2>Kontak <span>Kami</span></h2>
        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident. --}}
        </p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5597.15130829441!2d112.5800046988286!3d-7.265445385261426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7801537301e989%3A0x4a4017d5b23146b4!2sWisata%20Telaga%20Pelemwatu!5e0!3m2!1sid!2sid!4v1683136087703!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form method="POST" action="mailto:Frenkyfir@gmail.com">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="No HP">
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>

        </div>
    </section>

    {{-- <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("slide");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 10000); // Change image every 2 seconds
        }
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#readMore').click(function() {
                $("#dots,#readMore,#citeText").css("display", "none");
                $("#fullText").css("display", "block");
                $("#readLess").css("display", "inline");
            });
            $('#readLess').click(function() {
                $("#citeText").css("display", "block");
                $("#dots,#readMore").css("display", "inline");
                $("#fullText,#readLess").css("display", "none");
            });
        });
    </script>
@endsection
