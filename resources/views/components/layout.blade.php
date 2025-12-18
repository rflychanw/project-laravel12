<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <!-- <link rel="stylesheet" href="/css/style.css"> -->
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  @vite('resources/css/app.css')
</head>

<body class="h-full ">
  <div class="min-h-full">
    <x-navbar></x-navbar>
    <x-header>{{ $title }}</x-header>
    <main class="px-7">
      <div class="mx-auto max-w-7xl px-10 py-6 sm:px-6 lg:px-8  ">
        {{ $slot }}
      </div>
    </main>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</body>

</html>