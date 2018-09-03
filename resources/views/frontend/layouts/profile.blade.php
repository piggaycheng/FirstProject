@extends('frontend.layouts.master')

@section('title', 'Gallery')

@section('content')

<div class="page-wrap">

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="home"><span class="icon fa-home"></span></a></li>
                <li><a href="gallery"><span class="icon fa-camera-retro"></span></a></li>
                <li><a href="profile" class="active"><span class="icon fa-file-text-o"></span></a></li>
            </ul>
        </nav>

    <!-- Main -->
        <section id="main">
            <!-- Header -->
                @include('frontend.layouts.header')

            <section class="intro-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 col-lg-2"></div>
                        <div class="col-md-10 col-lg-8">
                            <div class="intro">
                                <div class="profile-img"><img src="images/profile-1-250x250.jpg" alt=""></div>
                                <h2><b>{{ Auth::user()->name }}</b></h2>
                                <form>
                                    <ul class="information margin-tb-30">
                                        <li><label for="profile-career">CAREER : </label><span class="profile-data">{{ $userInfo->career }}</span></li>
                                        <li><label for="profile-born">BORN : </label><span class="profile-data">{{ $userInfo->birthday }}</span></li>
                                        <li><label for="profile-cellphone">CELLPHONE : </label><span class="profile-data">{{ $userInfo->cellphone }}</span></li>
                                    </ul>
                                </form>
                                <button class="btn" id="profile-edit">edit</button>
                                <button class="btn btn-primary" id="profile-submit" style="display: none;">submit</button>
                                <button class="btn btn-danger" id="profile-cancel" style="display: none;">cancel</button>
                            </div><!-- intro -->
                        </div><!-- col-sm-8 -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- intro-section -->

            <!-- Gallery -->
            <section id="galleries">

            <!-- Photo Galleries -->
                <div class="gallery">
                    <header class="special">
                        <h2>Photo</h2>
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
                </div>
            </section>

            <!-- Footer -->
                @include('frontend.layouts.footer')
        </section>
</div>

@endsection