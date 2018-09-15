@extends('frontend.layouts.master')

@section('title', 'Gallery')

@section('content')

@include('frontend.layouts.modal')

<div class="page-wrap">

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="{{ route('home') }}"><span class="icon fa-home"></span></a></li>
                <li><a href="{{ route('gallery') }}"><span class="icon fa-camera-retro"></span></a></li>
                <li><a href="{{ route('profile') }}" class="active"><span class="icon fa-file-text-o"></span></a></li>
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
                                <div class="profile-img"><img id="profile-img-tag" src="{{ asset($userInfo->img_path) }}" alt=""></div>
                                <form id="profile-form">
                                    @csrf
                                    <label class="button" for="profile-img" id="button-profile-img" style="display: none;">
                                        <input id="profile-img" type="file" name="photo" style="display: none;">
                                        Upload Profile Picture
                                    </label>
                                    <h2><b>{{ $userInfo->name }}</b></h2>
                                    <ul class="information margin-tb-30">
                                        <li><label for="profile-career">CAREER : </label><span class="profile-data">{{ $userInfo->career }}</span></li>
                                        <li><label for="profile-born">BORN : </label><span class="profile-data">{{ $userInfo->birthday }}</span></li>
                                        <li><label for="profile-cellphone">CELLPHONE : </label><span class="profile-data">{{ $userInfo->cellphone }}</span></li>
                                    </ul>
                                </form>
                                @if($userInfo->user_id == Auth::user()->id)
                                <button class="btn" id="profile-edit">Edit Profile</button>
                                @endif
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
                        @foreach ($posts as $post)
                            <div class="media">
                                <a data-toggle="modal" data-target="#myModal"><img src="{{ asset($post->img_path) }}"/></a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="pagination-container">
                    <div id="pagination">
                        {{ $posts->links() }}
                    </div>
                <div>
            </section>

            <!-- Footer -->
                @include('frontend.layouts.footer')
        </section>
</div>

<script>
    var posts = <?php echo json_encode($posts); ?>;
</script>

@endsection