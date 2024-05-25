<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-200">
        <a href="/blog/{{ $post->slug }}" class="hover:underline">
            <h3 class="mb-1 text-3xl tracking-tight font-bold text-gray-800">{{ $post->title }}</h3>
        </a>

        <div class="text-base text-gray-500">
            <a href="#">{{ $post->author->name }}</a>  | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post->body }}</p>
    </article>
    @endforeach

</x-layout>
