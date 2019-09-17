@extends('user.app')

    @section('main-content')
        {{--facebook coments--}}
        {{--<div id="fb-root"></div>--}}
        {{--<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=443005819794528&autoLogAppEvents=1"></script>--}}

        <!-- Post Content -->
        <article>
            <div class="container post__content">
                <div class="row">

                    <div class="post__body mb-2">
                        <h1 align="center" class="blog_post-title">{{ $post->title }}</h1>

                        <p class="created__at">By <a href="#">Leonid Brosnan</a> | Created at {{ $post->created_at->diffForHumans() }}</p>

                        <img class="post__img" src="{{Storage::disk('local')->url($post->image)}}">

                        <span class="post__body">
                       {!! htmlspecialchars_decode($post->body) !!}
                        </span>

                        {{-- Tags clouds --}}
                        @foreach($post->tags as $tag)
                            <a class="post__tag" href="{{ route('tag', $tag->slug) }}">
                                {{ $tag->name }}
                            </a>
                        @endforeach

                        @foreach($post->categories as $category)
                                <a  href="{{route('category', $category->slug)}}" class="offset-3 post__category">{{ $category->name }}</a>
                        @endforeach

                   </div>

                    {{--facebook coments--}}
                    {{--<div class="fb-comments" data-href="http://127.0.0.1:8000/post/slug2" data-width="" data-numposts="5"></div>--}}

                </div>
            </div>
        </article>

        <hr>

        <h4  class="lattest coda ">Lattest News</h4>

        <hr class="purple__hr">

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

        </section>

        <hr>

    @endsection