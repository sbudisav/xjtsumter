<x-app-layout>

    <div class="container w-full md:max-w-3xl mx-auto pt-20">

        <a href="{{ route('blog') }}" class="bg-white shadow hover:shadow-md"><p class="text-lg text-blue-800 font-bold flex items-center">Back</p>
        </a>

        <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">
          {{ $post->title }}
        </h1>

        <p class="py-6">
            {{ $post->body }}
        </p>
    </div>

    <div class="flex md:max-w-3xl mx-auto pt-12 center-bottom">
        @if ($previous)
            <a href="{{ URL::to( 'blog/post/' . $previous->id ) }}" class="bg-white shadow hover:shadow-md text-left p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
                <p class="pt-2"> {{ $previous->title }}</p>
            </a>
        @endif 

        @if ($next)
            <a href="{{ URL::to( 'blog/post/' . $next->id ) }}" class="bg-white shadow hover:shadow-md text-right p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
                <p class="pt-2">{{ $next->title }}</p>
            </a>
        @endif
    </div>
</x-app-layout>