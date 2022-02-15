@extends('template.index')
@section('title')
    Blog - {{ $post->title }}
@stop
@section('content')
    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Post</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Blog Post -->
                <div class="col-sm-8">
                    <div class="blog-post blog-single-post">
                        <div class="single-post-title">
                            <h2>{{ $post->title }}</h2>
                        </div>

                        <div class="single-post-image">
                            <img src="{{ asset('assets/img/blog/' . $post->image) }}" alt="{{ $post->title }}">
                        </div>
                        <div class="single-post-info">
                            <i class="glyphicon glyphicon-time"></i>{{ $post->created_at->format('d M, Y') }}<a href="#"
                                title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
                        </div>
                        <div class="single-post-content">
                            <p>{{ !!$post->content }}</p>
                        </div>
                    </div>
                </div>
                <!-- End Blog Post -->


                <!-- Sidebar -->
                <div class="col-sm-4 blog-sidebar">
                    <h4>Recent Posts</h4>

                    <ul class="recent-posts">
                        @include('posts._recents', ['posts' => \App\Models\Post::orderBy('created_at',
                        'DESC')->take(4)->get()])
                    </ul>

                    <h4>Categories</h4>
                    <ul class="blog-categories">
                        @include('categories._index', ['categories' => \App\Models\Categorie::orderBy('name',
                        'ASC')->get()])
                    </ul>

                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
@stop
