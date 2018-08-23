@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
<div class="page-wrap">

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="home" class="active"><span class="icon fa-home"></span></a></li>
                <li><a href="gallery"><span class="icon fa-camera-retro"></span></a></li>
                <li><a href="generic.html"><span class="icon fa-file-text-o"></span></a></li>
            </ul>
        </nav>

    <!-- Main -->
        <section id="main">
            <!-- Header -->
                @include('frontend.layouts.header')

            <!-- Banner -->
                <section id="banner">
                    <div class="inner">
                        <h1>Hey, I'm Snapshot</h1>
                        <p>A fully responsive gallery template by <a href="https://templated.co">TEMPLATED</a></p>
                        <ul class="actions">
                            <li><a href="#galleries" class="button alt scrolly big">Continue</a></li>
                        </ul>
                    </div>
                </section>

            <!-- Gallery -->
                <section id="galleries">

                    <!-- Photo Galleries -->
                        <div class="gallery">
                            <header class="special">
                                <h2>What's New</h2>
                            </header>
                            <div class="content">
                                <div class="media">
                                    <a href="{{ asset('images/fulls/01.jpg') }}"><img src="{{ asset('images/thumbs/01.jpg') }}" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="{{ asset('images/fulls/05.jpg') }}"><img src="{{ asset('images/thumbs/05.jpg') }}" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="{{ asset('images/fulls/09.jpg') }}"><img src="{{ asset('images/thumbs/09.jpg') }}" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="{{ asset('images/fulls/02.jpg') }}"><img src="{{ asset('images/thumbs/02.jpg') }}" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="{{ asset('images/fulls/06.jpg') }}"><img src="{{ asset('images/thumbs/06.jpg') }}" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="{{ asset('images/fulls/10.jpg') }}"><img src="{{ asset('images/thumbs/10.jpg') }}" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="{{ asset('images/fulls/03.jpg') }}"><img src="{{ asset('images/thumbs/03.jpg') }}" alt="" title="This right here is a caption." /></a>
                                </div>
                                <div class="media">
                                    <a href="{{ asset('images/fulls/07.jpg') }}"><img src="{{ asset('images/thumbs/07.jpg') }}" alt="" title="This right here is a caption." /></a>
                                </div>
                            </div>
                            <footer>
                                <a href="gallery.html" class="button big">Full Gallery</a>
                            </footer>
                        </div>
                </section>
                
            <!-- Footer -->
                @include('frontend.layouts.footer')

        </section>
</div>
@endsection

