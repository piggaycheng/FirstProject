@extends('frontend.layouts.master')

@section('title', 'Gallery')

@section('content')
<div class="page-wrap">

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="home"><span class="icon fa-home"></span></a></li>
                <li><a href="gallery" class="active"><span class="icon fa-camera-retro"></span></a></li>
                <li><a href="{{ route('profile') }}"><span class="icon fa-file-text-o"></span></a></li>
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
                                    @foreach ($posts as $post)
                                        <div class="media">
                                            <a href="{{ asset($post->img_path) }}"><img src="{{ asset($post->img_path) }}" title="see"/></a>
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

                

                <section id="contact">
                    <!-- Form -->
                        <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!--Content-->
                            <div class="column">
                                <h3>Write Something</h3>
                                <div class="field">
                                    <label for="content">Content</label>
                                    <textarea name="content" id="content" rows="6" placeholder="content"></textarea>
                                </div>
                                <ul class="actions">
                                    <li><input value="Submit" class="button" type="submit"></li>
                                </ul>
                            </div>
                        <!-- image -->
                            <div class="social column">
                                <h3>Image Upload</h3>
                                <label class="button" for="profile-img">
                                    <input id="profile-img" type="file" name="photo" style="display:none;">
                                    Upload Image
                                </label>
                                <img id="profile-img-tag" style="width: 100%;" />
                            </div>
                        </form>
                </section>
            <!-- Footer -->
                @include('frontend.layouts.footer')
                
        </section>
</div>

@if (Session::has('message'))
    <script>
        alert('{{ Session::get('message') }}');
    </script>
@endif

@endsection