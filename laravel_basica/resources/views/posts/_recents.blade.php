{{-- Variable disponible:
    $posts Array(Post) --}}

@foreach ($posts as $post)
    <li><a
            href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}">{{ $post->title }}</a>
    </li>
@endforeach
