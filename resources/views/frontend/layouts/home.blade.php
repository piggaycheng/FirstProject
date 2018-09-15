@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')

@include('frontend.layouts.modal')
<div class="page-wrap">

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="home" class="active"><span class="icon fa-home"></span></a></li>
                <li><a href="gallery"><span class="icon fa-camera-retro"></span></a></li>
                <li><a href="{{ route('profile') }}"><span class="icon fa-file-text-o"></span></a></li>
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
                                @foreach ($posts as $post)
                                    <div class="media">
                                        <a data-toggle="modal" data-target="#myModal"><img src="{{ asset($post->img_path) }}"/></a>
                                    </div>
                                @endforeach
                            </div>
                            <!-- <footer>
                                <a href="gallery.html" class="button big">Full Gallery</a>
                            </footer> -->
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

