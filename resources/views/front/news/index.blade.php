@extends('front.layouts.index')

@section('content')
    <section class="products" id="products" data-aos="zoom-in" data-aos-duration="2000">
        <h2>Berita <span>Terbaru</span></h2>

        <div class="container" style="padding: 10%">
            @foreach ($post as $item)
                <div class="tile-header" style="margin-top: 25px">
                    <a style="color: white" href="/frontpost/{{ $item->id }}">
                        <h3>{{ $item->title }}</h3>
                    </a>
                </div>
                <div class="post-image">
                    @if (@empty($item->image))
                        <img style="max-width: 100%"
                            src="https://plus.unsplash.com/premium_photo-1682390303849-9cf52609ce82?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                            alt="">
                    @else
                        <img style="max-width: 70%" src="{{ asset('storage/' . $item->image) }}">
                    @endif
                </div>
                <div style="color:cornflowerblue"> {{ Carbon\Carbon::parse($item->created_at)->format('j F Y') }}
                </div>
                <div style="margin-bottom: 25px">
                    {{ \Illuminate\Support\Str::limit(strip_tags($item->description), 70) }}
                    @if (strlen(strip_tags($item->description)) > 70)
                        ... <a style="color:cornflowerblue" href="/frontpost/{{ $item->id }}">Readmore</a>
                    @endif
                </div>



                {{-- <p class="ArticleBody">
                    {{ str_limit(strip_tags($post->body), 50) }}
                    @if (strlen(strip_tags($post->body)) > 50)
                        ... <a href="{{ action('PostsController@show', $post) }}" class="btn btn-info btn-sm">Read More</a>
                    @endif
                </p> --}}
            @endforeach
            {{ $post->links() }}
        </div>




    </section>
@endsection
