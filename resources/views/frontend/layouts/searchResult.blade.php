@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
<div class="page-wrap">

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="home"><span class="icon fa-home"></span></a></li>
                <li><a href="gallery"><span class="icon fa-camera-retro"></span></a></li>
                <li><a href="{{ route('profile') }}"><span class="icon fa-file-text-o"></span></a></li>
            </ul>
        </nav>

    <!-- Main -->
        <section id="main">
            <!-- Header -->
                @include('frontend.layouts.header')

                <section id="searchResults">
                    @foreach ($userInfos as $userInfo)
                        <div class="mycard">
                            <a href="{{ route('clickCard', ['id' => $userInfo->id]) }}">
                                <div class="mycard-img-container">
                                    <img src="{{ asset($userInfo->img_path) }}" alt="" style="width:100%">
                                </div>
                                <div class="container">
                                    <h4><b>{{ $userInfo->name }}</b></h4> 
                                    <p>{{ $userInfo->career }}</p> 
                                </div>
                            </a>
                        </div>
                    @endforeach
                </section>
                
            <!-- Footer -->
                @include('frontend.layouts.footer')

        </section>
</div>
@endsection