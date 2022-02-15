@extends('template.index')

@section('title')
    Blog
@stop


@section('content')

    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Blog Post -->
                @foreach ($posts as $post)
                    <div class="col-sm-8">
                        <div class="blog-post blog-single-post">
                            <div class="single-post-title">
                                {{-- <h2>{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title)]) }}
                                </h2> --}}
                                <h2>{{ $post->title }}</h2>
                            </div>

                            <div class="single-post-image">
                                <img src="{{ asset('assets/img/blog/' . $post->image) }}" alt="{{ $post->title }}">
                            </div>
                            <div class="single-post-info">
                                <i class="glyphicon glyphicon-time"></i>{{ $post->created_at->format('d M, Y') }} <a
                                    href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
                            </div>
                            <div class="single-post-content">
                                <h3>{{ $post->title }}</h3>
                                <p>
                                    {{ $post->content }}
                                </p>
                                <a href="{{ route('posts.show', ['post' => $post->id, 'slug'=> Str::slug($post->title, '-')])}}" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Post -->
                @endforeach

            </div>
        </div>
    </div>
@stop
