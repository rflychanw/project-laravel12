<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ($posts as $post)

  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{$post['slug']}}" class="hover:underline">
      <h2 class="text-3xl font-bold mb-4 tracking-tight text-gray-900">
        {{ $post['title']}}
      </h2>
    </a>
    <div class="text-base text-gray-500">
      <a href="/authors/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a> | <span>{{ $post->created_at->format('d M Y') }}</span>
    </div>
    <p class="text-base my-4 font-light">
      {{ Str::Limit($post['body'], 120)}}
    </p>
    <a href="/posts/{{ $post['slug']}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
  </article>
  @endforeach

</x-layout>