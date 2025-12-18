<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>


  <article class="py-8 max-w-screen-md ">
    
      <h2 class="text-3xl font-bold mb-4 tracking-tight text-gray-900">
        {{ $post['title']}}
      </h2>

    <div class="text-base text-gray-500">
      <a href="#">{{ $post['author']}}</a> | <span>{{ $post->created_at->format('d M Y') }}</span>
    </div>
    <p class="text-base my-4 font-light">
      {{ $post['body'] }}
    </p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back </a>
  </article>


</x-layout>