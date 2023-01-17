<nav class="md:container md:mx-auto w-screen flex justify-between px-20 py-8 bg-white">
  <!--logo-->
    <div onclick="handleclick" class="text-3xl font-medium "><a href="/">
      <h3>LOGO</h3>
    </div>
    <!--nav button-->
    <div onclick="handleclick" class=" hidden sm:flex  content-center text-grey-fade m-auto text-center">
      <a class="mr-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="#about us">About Us</a>
      <a class="mx-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="/quiz">Quiz</a>
      <a class="mx-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="/modul">Modul</a>
      <a class="ml-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700" href="/coba">Help</a>
    </div>
    <!--button sign in-->
    @guest
      @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
      @endif

      @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
      @endif
    @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>
    @endguest
    <button class="bg-green-111 px-4 py-2 rounded font-inter font-medium text-white ">
      Sign In
    </button>
    <div class="flex sm:hidden">
  <div>
        <button class="relative group">
          <div class="relative flex flex-col overflow-hidden items-center justify-center w-[32px] h-[32px] transform transition-all bg-green-111 ring-0 ring-gray-300
          hover:ring-8 group-focus:ring-4 ring-opacity-30 duration-200 shadow-md">
            <div class="transform transition-all duration-150 overflow-hidden -translate-y-5 group-focus:translate-y-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6h-6 w-6 animate-bounce text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </div>
  
            <div class="flex flex-col justify-between w-[20px] h-[10px] transform transition-all duration-300 origin-center overflow-hidden -translate-y-3">
              <div class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-y-6"></div>
              <div class="bg-white h-[2px] w-7 transform transition-all duration-300 group-focus:translate-y-6 delay-75"></div>
              <div class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-y-6 delay-100"></div>
            </div>
          </div>
        </button>
      </div>
  
    </div>
</nav>