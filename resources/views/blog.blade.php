<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-200">
        <a href="/blog/{{ $post->slug }}" class="hover:underline">
            <h3 class="mb-1 text-3xl tracking-tight font-bold text-gray-800">{{ $post->title }}</h3>
        </a>

        <div>
            By
            <a href="authors/{{ $post->author->username }}" class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a>
            in
            <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500" >{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>

        <p class="my-4 font-light">{{ $post->body }}</p>
        <a href="/blog/{{ $post->slug }}" class="font-medium text-blue-400 hover:underline text-base text-gray-500">Read more &raquo;</a>
    </article>
    @endforeach

</x-layout>
