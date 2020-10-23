<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('homepage') }}">
            Home
        </a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('blog') }}">
            Blog
        </a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('blog') }}">
            Projects
        </a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('myfriends') }}">
            Friends
        </a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('blog') }}">
            Store
        </a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('blog') }}">
            Contact
        </a>
    </li>

    @auth
        <li>
            <a class="font-bold text-lg mb-4 block" href="{{ route('profile.show') }}">
                Profile
            </a>
        </li>

        <li>
            <form method="POST" action="/logout">
                @csrf
                <button class="font-bold text-lg">Logout</button>
            </form>
        </li>
    @else
        <li> 
            <a href="{{ route('login') }}" class="font-bold text-lg mb-4 block">Login</a>
        </li>

        <li>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="font-bold text-lg mb-4 block">Register</a>
            @endif
        </li>
    @endif


    @auth
        <li>
            @livewire('navigation-dropdown')
        </li>
    @endauth
</ul>