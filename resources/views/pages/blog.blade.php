<x-app-layout>

    <div class="container w-full md:max-w-3xl mx-auto pt-20">
        @foreach ($posts as $post)
            <h1 class="font-bold text-gray-900 pt-6 pb-2 md:text-3xl hover:text-gray-600">
                <a href="{{ $post->path() }}"> {{ $post->title }} </a>
            </h1>
        @endforeach 
    </div>

</x-app-layout>