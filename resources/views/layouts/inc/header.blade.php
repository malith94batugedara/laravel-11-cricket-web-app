<header class="py-10 float-end mr-5">
    @if (Route::has('login'))
        <nav class="float-end">
            <div class="row">
              <div class="col-md-2">
            <a href="{{ route('welcome') }}"><img src="{{ asset('assets/images/1.jpeg') }}" alt="Sri Lanka Cricket Image" class="float-start" width="100px"style="margin-right: 300px;margin-left: 30px"/></a>
              </div>
              <div class="col-md-10">
            <a class="text text-warning mr-10">Players</a>
            <a class="text text-warning mr-10">Schedule</a>
            <a class="text text-warning mr-10">Grounds</a>
            <a class="text text-warning mr-10">News</a>
            <a class="text text-warning mr-10">About</a>
            <a class="text text-warning mr-10">Contact</a>
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="btn btn-success mr-3 "
                >
                    Log in
                </a>
                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="btn btn-primary"
                    >
                        Register
                    </a>
                @endif
            @endauth
              </div>
            </div>
        </nav>
    @endif

    <main>
        @yield('content')
    </main>
    
</header>