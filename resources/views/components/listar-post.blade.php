<div>
        @if ($posts->count())
        <section class="container mx-auto mt-10">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($posts as $post)
                    <div>
                    <a href="{{ route('posts.show', ['post' => $post, 'user' => $post->user]) }}">
                        <img src="{{ asset('uploads') . '/' . $post->imagen}}" alt="Imagen del post {{ $post->titulo}}"></a>
        
                    </div>
                @endforeach
            </div>
        </section>
        
        <div class="my-10">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    @else
        <h1 class="text-center">No hay Posts, tienes que seguir a alguien</h1>
    @endif
</div>