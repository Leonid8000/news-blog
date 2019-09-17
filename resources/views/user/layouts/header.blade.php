<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand coda" href="{{route('main')}}">BOXMMA</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">

                @foreach($categories as $category)
                    <li class="nav-item">
                        <a href="{{route('category', $category->slug)}}" class="nav-link">{{ $category->name }}</a>
                    </li>
                @endforeach


                @if(\Illuminate\Support\Facades\Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                 @else
                    <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endif



            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header style="background-image: url(@yield('bg-img'))" id="header">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>@yield('title')</h1>
                    <span class="subheading">@yield('sub-heading')</span>
                </div>
            </div>
        </div>
    </div>
</header>
{{--{{ asset('user/img/home-bg.jpg') }}--}}



