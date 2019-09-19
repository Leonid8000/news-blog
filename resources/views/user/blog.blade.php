@extends('user.app')


@section('title-content')

    {{--advertising banner--}}
    {{--<div class="banner"></div>--}}

    <section class="events__section">

        <div class="event__first">
            <a href="{{ route('post', $postFirst->slug) }}">
            <div class="box_div">
                <div class="figure__first">

                        <img src="{{Storage::disk('local')->url($postFirst->image)}}" alt="">
                    {{--<img class="post__img" src="/public/img/{{$post->image}}" alt="">--}}
                    {{--<img class="post__img" src="/public/img/bas.jpg" alt="">--}}

                    <p  class="firstEvent__title">{{ $postFirst->title }}</p>

                </div>
            </div>
            </a>
        </div>

        <div>
            <div class="other__events" >

                @foreach($postsFour as $post)
                    <a href="{{route('post', $post->slug)}}">
                <div class="box_div">
                    <div class="figures">
                        <img src="{{Storage::disk('local')->url($post->image)}}" alt="">
                        <div class="event__title">
                            <p>{{ $post->title }}</p>
                        </div>
                    </div>
                </div>
                    </a>
                @endforeach
            </div>
        </div>

    </section>

    {{--advertising banner--}}
    {{--<div class="banner"></div>--}}


    <h4  class="lattest coda ">Lattest News</h4>

    <hr class="purple__hr">

    @endsection

    @section('main-content')

<!-- Main Content -->

        <section class="main__section">

                <div class="container">
                    <div class="row ">
                        {{-- Add class test for videos part --}}

                        @foreach($posts as $post)
                        <hr class="post__hr">
                <div class="col-lg-3 col-md-4 col-4 block__img">

                    <img class="img-blog" src="{{Storage::disk('local')->url($post->image)}}">
                </div>

                <div class=" col-lg-6 col-md-8 col-8 post_title_subtitle">

                    <a href="{{ route('post', $post->slug) }}">

                        <h1 class="post-title">
                            {{$post->title}}
                        </h1>

                        <p class="post-subtitle">
                            {{ $post->subtitle }}...
                        </p>
                    </a>

                    <p class="post-meta">
                       <span class="grey">By:</span> Patrick L. Stumberg  <span class="grey">| {{ $post->created_at->diffForHumans() }} </span>
                    </p>
                </div>

                        @endforeach


                    </div>
                </div>

            <!-- Pager -->
                <ul class="pager">
                        {{ $posts->links() }}
                </ul>
</section>

<div class="banner"></div>

    @endsection