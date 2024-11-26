<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title></title>
</head>
<body>
    <x-navbar></x-navbar>

    <div class="px-56 h-screen">
        <div class="flex justify-center items-center h-full w-full">
            <form action="{{ route('posts.store') }}" method="POST" class="flex flex-col gap-4 p-5 rounded-md border-zinc-500 max-w-xl">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="New title" class="py-1.5 px-3 border rounded-md active:border-zinc-600">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="caption">Caption</label>
                    <textarea type="text" name="caption" id="caption" placeholder="Caption" class="py-1.5 px-3 border rounded-md active:border-zinc-600"></textarea>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" placeholder="Author" class="py-1.5 px-3 border rounded-md active:border-zinc-600">
                </div>
                <button type="submit" class="bg-zinc-900 text-white py-2 rounded-md mt-5">Sumbit</button>
            </form>
        </div>
    </div>
</body>
</html>