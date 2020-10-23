<x-app-layout>

    <div class="container w-full md:max-w-3xl mx-auto pt-20">
        @foreach ($friends as $friend)
            <h3 class="font-bold text-gray-900 pt-6 pb-2 md:text-3xl hover:text-gray-600">
              
            <div class="mt-2" x-show="! photoPreview">
                <img src="{{ $friend->profile_photo_url }}" alt="{{ $friend->name }}" class="rounded-full h-20 w-20 object-cover">
            </div>

                <a href=""> {{ $friend->name }} </a>
            </h3>
        @endforeach 
    </div>

</x-app-layout>