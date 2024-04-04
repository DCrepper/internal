<nav class="-mx-3 flex flex-1 justify-end">
    @auth
        <a class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            href="{{ url('/dashboard') }}">
            Dashboard
        </a>
    @else
        <a class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            href="{{ route('login') }}">
            Log in
        </a>

        @if (Route::has('register'))
            <a class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                href="{{ route('register') }}">
                Register
            </a>
        @endif
    @endauth
</nav>
