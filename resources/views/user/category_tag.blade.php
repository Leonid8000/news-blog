@extends('user.app')


@section('title-content')

    <div class="banner"></div>

    <hr class="red__hr">

    <h4 align="center" class="lattest coda">News</h4>
    <hr class="purple__hr">

@endsection

@section('main-content')

    <!-- Main Content -->

    <section class="main__section">
        <div class="container">
            <div class="row">
        @foreach($posts as $post)

                    <div class="col-lg-4 col-6">
                        <hr class="post__hr">
                        <div class=" block__img">

                            <img class="img-blog" src="{{asset('user/img/image.jpeg')}}">
                        </div>

                        <div class=" ">


                            <a href="{{ route('post', $post->slug) }}">

                                <h1 class="post-title">
                                    {{$post->title}}
                                </h1>

                                <p class="post-subtitle">
                                    {{ $post->subtitle }}...
                                </p>
                            </a>

                            <p class="post-meta">
                                <span class="grey">By:</span> Patrick L. Stumb  <span class="grey"> | {{ $post->created_at->diffForHumans() }} </span>
                            </p>
                        </div>
                    </div>

    @endforeach
<hr>
</div>

    <!-- Pager -->
        <ul class="pager">
            {{ $posts->links() }}
        </ul>
    </section>

@endsection

{{--<img class="img-blog" src="{{Storage::disk('local')->url($post->image)}}">--}}