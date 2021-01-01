<div class="collapse navbar-collapse d-inline-block" id="navbarNav">
    @guest
      {{-- Jika guest yang mengakses halaman --}}
      <a class="navbar-brand text-light" href="{{ route('root') }}">KMG BungaExpress</a>
    @else
      {{-- Jika admin dan member yang mengakses halaman --}}
      <a class="navbar-brand text-light" href="{{ route('home') }}">KMG BungaExpress</a>
    @endguest
    
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item">
                <a class="nav-link text-white js-scroll-trigger mr-3" href="{{ route('login') }}">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white js-scroll-trigger mr-3 ml-3" href="{{ route('about') }}">
                  Tentang Kami
              </a>
            </li>

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white js-scroll-trigger mr-3 ml-3" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link text-white js-scroll-trigger mr-3 ml-3" href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    {{ __('Masuk') }}
                </a>
            </li>
            
        @else
            @if(auth()->user()->role=="member")
              <li class="nav-item">
                <a class="nav-link text-white js-scroll-trigger mr-3" href="{{ route('cart') }}">
                    <i class="fas fa-shopping-cart"></i>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-white js-scroll-trigger mr-3 ml-3" href="{{ route('memberproducts') }}">
                    Daftar Produk
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-white js-scroll-trigger mr-3 ml-3" href="{{ route('about') }}">
                    Tentang Kami
                </a>
              </li>
  
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white ml-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  @if(auth()->user()->image == null)
                    <img src="{{ asset('assets/image/default.jpg') }}" class="mr-2" style="width: 25px; height: 25px; border-radius: 25px;" alt="">
                  @else
                    <img src="{{ asset('assets/image/' . auth()->user()->image) }}" class="mr-2" style="width: 25px; height: 25px; border-radius: 25px;" alt="">
                  @endif
                  {{ Auth::user()->username }}
                </a>
  
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-dark" href="{{ route('profile', auth()->user()->id) }}">
                    Profil
                  </a>

                    <a class="dropdown-item text-dark" href="{{ route('transactions') }}">
                      Daftar Transaksi
                    </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        {{ __('Logout') }}
                    </a>
  
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
              </li>
            
              @elseif(auth()->user()->role=="seller")
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white ml-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  @if(auth()->user()->image == null)
                    <img src="{{ asset('assets/image/default.jpg') }}" class="mr-2" style="width: 25px; height: 25px; border-radius: 25px;" alt="">
                  @else
                    <img src="{{ asset('assets/image/' . auth()->user()->image) }}" class="mr-2" style="width: 25px; height: 25px; border-radius: 25px;" alt="">
                  @endif
                  {{ Auth::user()->username }}
                </a>
  
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-dark" href="{{ route('myproducts') }}">
                    Produk Saya
                  </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        {{ __('Logout') }}
                    </a>
  
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
              </li>
            @endif
        @endguest
      </ul>
  </div>