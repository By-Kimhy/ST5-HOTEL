<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Deluxe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> ម៉ឺនុយ
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @yield('home_active')"><a href="{{url('/')}}" class="nav-link">ទំព័រដើម</a></li>
                <li class="nav-item @yield('about_active')"><a href="{{url('/about')}}" class="nav-link">អំពីយើង</a></li>
                <li class="nav-item @yield('room_active')"><a href="{{url('/rooms')}}" class="nav-link">បន្ទប់</a></li>
                <li class="nav-item @yield('restaurant_active')"><a href="{{url('/restaurant')}}" class="nav-link">ភោជនីយដ្ឋាន</a></li>
                <li class="nav-item @yield('contact_active')"><a href="{{url('/contact')}}" class="nav-link">ទាក់ទងមកយើងខ្ញុំ</a></li>
                <li class="nav-item">
                    <a href="{{url('/dashboard')}}" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
