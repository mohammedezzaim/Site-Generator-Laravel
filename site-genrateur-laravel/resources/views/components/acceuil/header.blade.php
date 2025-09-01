<header class="header_section fixed-top">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/Black___Blue_Minimalist_Modern_Initial_Font_Logo__1_-removebg-preview (1).png') }}"
                    alt="Logo" style="width:100px;height: 55px;">
            </a>

            <!-- Button pour afficher le menu mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Menu de navigation -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <!-- Vérification de l'authentification de l'utilisateur -->
                    @if (!Auth::check())
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="/templates">Templates</a></li>
                        <li class="nav-item">
                            <a class="btn btn-outline-primary" href="#loginModal1" data-bs-toggle="modal">
                                <i class="fas fa-user me-1"></i> Login
                            </a>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="/user/templates">Templates</a></li>
                        <li class="nav-item"><a class="nav-link" href="/home">My Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item dropdown">
                            <button class="btn btn-link dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                                <i class="fas fa-chevron-down ms-1"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                        <i class="fas fa-user me-2"></i> Profile
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="fas fa-sign-out-alt me-2"></i> Log Out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

                
                </ul>

                <!-- Dropdown pour la langue et le mode sombre -->
                <div class="d-flex align-items-center gap-3">
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="text-primary fas fa-globe"></i> Langue
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="#" data-lang="fr">Français</a></li>
                            <li><a class="dropdown-item" href="#" data-lang="en">English</a></li>
                        </ul>
                    </div>

                    <!-- Bouton pour le mode sombre -->
                    <button id="darkModeToggle" class="btn btn-link">
                        <i class="fas fa-sun text-primary"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Modal de login si non authentifié -->
@if (!Auth::check())
    @include('partials.login_Modal')
@endif
