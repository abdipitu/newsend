<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Aplikasi Berita Sederhana</title>
</head>

<body>
    <x-navbar></x-navbar>

    <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-4 pt-56 lg:flex lg:h-96 lg:items-center">
          <div class="mx-auto max-w-xl text-center">
            <h1 class="text-3xl sm:text-5xl font-second">
              Dapatkan berita terbaru disini.
            </h1>
      
            <p class="mt-4 sm:text-md/relaxed text-zinc-600">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, vitae?
            </p>
      
            <div class="mt-8 flex flex-wrap justify-center gap-4">
              <a
                class="block w-full rounded bg-black px-12 py-3 text-sm font-medium text-white shadow hover:bg-zinc-900 focus:outline-none focus:ring active:bg-zinc-500 sm:w-auto"
                href="/posts/create"
              >
                Get Started
              </a>
      
              <a
                class="block w-full rounded px-12 py-3 text-sm font-medium text-black shadow focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                href="#"
              >
                Learn More
              </a>
            </div>
          </div>
        </div>
    </section>
    
    <section class="px-64 py-40 grid grid-cols-3 justify-center gap-5">
        @foreach ($posts as $item)    
        <div class="w-80 h-56 rounded-md border border-zinc-300">
            <div class="p-7 space-y-5">
                <h1 class="text-zinc-500">by: {{ $item->author }}</h1>
                <p class="font-second text-3xl text-zinc-800">{{ $item->title }}</p>
            </div>
        </div>
        @endforeach
    </section>
    </body>
</html>
