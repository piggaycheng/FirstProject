@extends('frontend.layouts.master')

@section('title', 'Gallery')

@section('content')
<div class="page-wrap">

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="home"><span class="icon fa-home"></span></a></li>
                <li><a href="gallery" class="active"><span class="icon fa-camera-retro"></span></a></li>
                <li><a href="generic.html"><span class="icon fa-file-text-o"></span></a></li>
            </ul>
        </nav>

    <!-- Main -->
        <section id="main">

            <!-- Header -->
                @include('frontend.layouts.header')

            <!-- Gallery -->
                <section id="galleries">

                    <!-- Photo Galleries -->
                        <div class="gallery">

                            <!-- Filters -->
                                <header>
                                    <h1>Gallery</h1>
                                    <ul class="tabs">
                                        <li><a href="#" data-tag="all" class="button active">All</a></li>
                                        <li><a href="#" data-tag="people" class="button">People</a></li>
                                        <li><a href="#" data-tag="place" class="button">Places</a></li>
                                        <li><a href="#" data-tag="thing" class="button">Things</a></li>
                                    </ul>
                                </header>

                                <div class="content">
                                    <div class="media all people">
                                        <a href="images/fulls/01.jpg"><img src="images/thumbs/01.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all place">
                                        <a href="images/fulls/05.jpg"><img src="images/thumbs/05.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all thing">
                                        <a href="images/fulls/09.jpg"><img src="images/thumbs/09.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all people">
                                        <a href="images/fulls/02.jpg"><img src="images/thumbs/02.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all place">
                                        <a href="images/fulls/06.jpg"><img src="images/thumbs/06.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all thing">
                                        <a href="images/fulls/10.jpg"><img src="images/thumbs/10.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all people">
                                        <a href="images/fulls/03.jpg"><img src="images/thumbs/03.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all place">
                                        <a href="images/fulls/07.jpg"><img src="images/thumbs/07.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all thing">
                                        <a href="images/fulls/11.jpg"><img src="images/thumbs/11.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all people">
                                        <a href="images/fulls/04.jpg"><img src="images/thumbs/04.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all place">
                                        <a href="images/fulls/08.jpg"><img src="images/thumbs/08.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                    <div class="media all thing">
                                        <a href="images/fulls/12.jpg"><img src="images/thumbs/12.jpg" alt="" title="This right here is a caption." /></a>
                                    </div>
                                </div>
                        </div>
                </section>

            <!-- Footer -->
                @include('frontend.layouts.footer')
                
        </section>
</div>
@endsection