<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @if (Auth::check() && Auth::user()->role == 'admin')
            {{ __('Admin Dashboard') }}
        @else
            {{ __('User Dashboard') }}
        @endif
    </title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!-- font awesome v5.5.0 free version -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">

    <!-- bootstrap version v4.0.0 -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />



    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>


    <style>
        /* Custom animation on hover */
        .card:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
        }

        /* Minimized card dimensions */
        .card {
            width: 370px;
            height: 350px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 35px;
        }

        .card img {
            height: 215px;
            width: 370px;
            object-fit: cover;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card {
                margin-bottom: 20px;
            }
        }

        .hover-card {
            border-radius: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        .hover-zoom {
            transition: transform 0.3s ease;
            border-radius: 1rem 1rem 0 0;
        }

        .hover-card:hover .hover-zoom {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.1) 100%);
        }

        .btn-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(116, 79, 168, 0.4);
        }

        .btn-hover:hover .fa-arrow-right {
            transform: translateX(3px);
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .image-wrapper {
            border-radius: 1rem 1rem 0 0;
            overflow: hidden;
        }

        .delete-btn {
            transition: all 0.3s ease;
            opacity: 0.8;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .delete-btn:hover {
            opacity: 1;
            transform: scale(1.1);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .image-wrapper:hover .delete-btn {
            opacity: 1;
        }
        :root {
            --primary: #3B82F6;
            --secondary: #F97316;
            --accent: #2563EB;
            --light: #F8FAFC;
            --dark: #1E293B;
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            transition: var(--transition);
        }

        .dark-mode {
            --light: #0F172A;
            --dark: #F8FAFC;
            background-color: var(--light);
            color: var(--dark);
        }

        .navbar {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.8);
            transition: var(--transition);
        }

        .dark-mode .navbar {
            background-color: rgba(15, 23, 42, 0.8);
        }

        .navbar-brand {
            font-weight: 800;
            color: var(--primary);
        }

        .nav-link {
            font-weight: 600;
            color: var(--dark);
            position: relative;
            padding: 0.5rem 1rem;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: var(--transition);
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, rgba(59, 130, 246, 0.1), transparent 70%);
            z-index: -1;
        }

        .dark-mode .hero-section::before {
            background: radial-gradient(circle at top right, rgba(59, 130, 246, 0.05), transparent 70%);
        }

        .hero-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: rgba(59, 130, 246, 0.1);
            color: var(--primary);
            border-radius: 9999px;
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 1.5rem;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            font-size: 1.25rem;
            line-height: 1.8;
            color: var(--dark);
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        .btn-custom {
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 9999px;
            transition: var(--transition);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(to right, var(--primary), var(--accent));
            border: none;
            color: white;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
        }

        .hero-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .hero-image:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .dark-mode .hero-image {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .pricing-card {
            background-color: white;
            border-radius: 20px;
            padding: 2rem;
            transition: var(--transition);
            border: none;
            height: 100%;
        }

        .dark-mode .pricing-card {
            background-color: rgba(30, 41, 59, 0.5);
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .pricing-header {
            text-align: center;
            padding-bottom: 2rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .dark-mode .pricing-header {
            border-bottom-color: rgba(255, 255, 255, 0.1);
        }

        .price {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary);
        }

        .price-period {
            font-size: 1rem;
            color: var(--dark);
            opacity: 0.7;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .feature-icon {
            width: 24px;
            height: 24px;
            margin-right: 1rem;
            color: var(--primary);
        }

        .review-card {
            background-color: white;
            border-radius: 20px;
            padding: 2rem;
            transition: var(--transition);
            border: none;
            height: 100%;
        }

        .dark-mode .review-card {
            background-color: rgba(30, 41, 59, 0.5);
        }

        .review-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .review-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .review-author {
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .review-role {
            font-size: 0.875rem;
            color: var(--dark);
            opacity: 0.7;
            margin-bottom: 1rem;
        }

        .review-text {
            font-style: italic;
            color: var(--dark);
            opacity: 0.9;
            line-height: 1.8;
        }

        .stats-section {
            background: linear-gradient(to right, var(--primary), var(--accent));
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover;
            opacity: 0.1;
            z-index: 0;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            background-color: rgba(255, 255, 255, 0.15);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .stat-label {
            font-size: 1.125rem;
            font-weight: 600;
            opacity: 0.9;
        }

        footer {
            background-color: var(--light);
            color: var(--dark);
            padding: 100px 0 30px;
        }

        .dark-mode footer {
            background-color: rgba(15, 23, 42, 0.95);
        }

        .footer-title {
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }

        .footer-link {
            color: var(--dark);
            text-decoration: none;
            transition: var(--transition);
            display: block;
            margin-bottom: 0.75rem;
        }

        .footer-link:hover {
            color: var(--primary);
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(59, 130, 246, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            transition: var(--transition);
        }

        .social-link:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-3px);
        }

        .contact-info {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .contact-icon {
            width: 24px;
            height: 24px;
            margin-right: 1rem;
            color: var(--primary);
        }

        @media (max-width: 991.98px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-section {
                padding: 60px 0;
            }

            .pricing-card, .review-card {
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 767.98px) {
            .hero-title {
                font-size: 2rem;
            }

            .stat-card {
                margin-bottom: 1.5rem;
            }
        }

        .animate-fade-up {
            animation: fadeUp 1s ease forwards;
            opacity: 0;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* Enhanced card styles */
.card {
    width: 100%;
    height: auto;
    border-radius: 16px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    overflow: hidden;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
}

.card .image-wrapper {
    height: 180px;
    overflow: hidden;
    position: relative;
}

.card img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.card:hover img {
    transform: scale(1.08);
}

.card-title {
    font-size: 1.1rem;
    letter-spacing: -0.02em;
}

.image-overlay {
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 100%);
}

/* Button styling */
.btn-gradient-primary {
    background: linear-gradient(135deg, #4776E6 0%, #8E54E9 100%);
    border: none;
    color: white;
    transition: all 0.3s ease;
}

.btn-gradient-primary:hover {
    box-shadow: 0 6px 15px rgba(78, 89, 229, 0.4);
}

.btn-outline-primary {
    border: 2px solid #4776E6;
    color: #4776E6;
    background: transparent;
    transition: all 0.3s ease;
}

.btn-outline-primary:hover {
    background: rgba(71, 118, 230, 0.1);
    transform: translateY(-2px);
}

.btn-hover {
    position: relative;
    overflow: hidden;
}

.btn-hover:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
}

.btn-hover:hover:before {
    width: 100%;
}

/* Delete button animation */
.delete-btn {
    transform: scale(0.9);
    opacity: 0.7;
    transition: all 0.3s ease;
}

.card:hover .delete-btn {
    transform: scale(1);
    opacity: 1;
}

/* Status badge styling */
.badge {
    font-size: 0.7rem;
    letter-spacing: 0.5px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.badge.bg-success {
    background: linear-gradient(135deg, #43cea2 0%, #185a9d 100%) !important;
}

.card:hover .badge {
    transform: translateY(2px);
}

        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
    </style>
</head>

<body class="font-sans antialiased">

    <div class="hero-section">


            <x-acceuil.header />

            <div class="container mt-5">
                <div class="row justify-content-center">
                    @forelse ($siteGenerators as $site)
                        @if ($site->user_id == Auth::user()->id)
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <div class="card hover-card shadow-lg border-0 overflow-hidden transition-all">
                                <div class="image-wrapper position-relative overflow-hidden">
                                    <!-- Delete Button -->
                                    <button type="button"
                                        class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 rounded-circle shadow delete-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal"
                                        data-site-id="{{ $site->id }}"
                                        aria-label="Supprimer"
                                        style="width: 32px; height: 32px; z-index: 2;">
                                        <i class="fas fa-times" style="font-size: 0.9rem;"></i>
                                    </button>
                                    
                                
                                    
                                    <img src="{{ asset($site->logo_url ?? '/images/template1.png') }}" 
                                        class="card-img-top img-fluid hover-zoom" 
                                        alt="Template Preview">
                                    <div class="image-overlay"></div>
                                </div>
                                
                                <div class="card-body text-center px-4 py-3">
                                    <h5 class="card-title fw-bold text-primary mb-1">{{$site->site_name }}</h5>
                                    <p class="card-text text-muted mb-3 small">{{ Str::limit($site->site_description, 60) }}</p>
                                    
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <small class="text-muted">
                                            <i class="far fa-calendar-alt me-1"></i> {{ $site->created_at->format('d M Y') }}
                                        </small>
                                        
                                    </div>
                                    
                                    <div class="d-flex gap-2 mt-3" >
                                        <!-- View Template Button -->
                                        <a class="btn btn-gradient-primary flex-grow-1 rounded-pill py-2 btn-hover" 
                                        href="{{ route('form.template1', ['id' => $site->id]) }}">
                                            <span class="d-flex align-items-center justify-content-center">
                                                <i class="fas fa-eye me-2"></i>
                                                Voir
                                            </span>
                                        </a>
                                        
                                        <!-- Update Template Button -->
                                        <a class="btn btn-outline-primary flex-grow-1 rounded-pill py-2 btn-hover " 
                                          href="{{ route('form.edit-template') }}">
                                            <span class="d-flex align-items-center justify-content-center">
                                                <i class="fas fa-pen me-2"></i>
                                                Modifier
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @empty
                        <div class="col-12 text-center">
                            <p class="lead">Vous n'avez pas encore créé de site. Commencez à en créer un !</p>
                        </div>
                    @endforelse


                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title">Confirmer la suppression</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Êtes-vous sûr de vouloir supprimer définitivement ce site ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <form id="deleteForm" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash me-2"></i>Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Gestion de la modale de suppression
            const deleteModal = document.getElementById('deleteModal');
            const deleteButtons = document.querySelectorAll('[data-bs-target="#deleteModal"]');

            deleteButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const siteId = button.dataset.siteId;
                    const form = document.getElementById('deleteForm');
                    form.action = `/sites/${siteId}`; // Adaptez selon vos routes
                });
            });

            // Animation de suppression de la carte
            document.getElementById('deleteForm').addEventListener('submit', (e) => {
                const button = document.querySelector(`[data-site-id="${e.target.action.split('/').pop()}"]`);
                if (button) {
                    const card = button.closest('.col-lg-4');
                    card.style.transition = 'all 0.3s';
                    card.style.opacity = '0';
                    setTimeout(() => card.remove(), 300);
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    
        // Dark mode toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;
    
        // Check saved theme in localStorage
        let isDark = localStorage.getItem('theme') === 'dark';
    
        const updateTheme = () => {
            if (isDark) {
                body.classList.add('dark-mode');
                darkModeToggle.querySelector('i').setAttribute('data-lucide', 'moon');
            } else {
                body.classList.remove('dark-mode');
                darkModeToggle.querySelector('i').setAttribute('data-lucide', 'sun');
            }
            lucide.createIcons(); // Reinitialize icons
        };
    
        darkModeToggle.addEventListener('click', () => {
            isDark = !isDark;
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateTheme();
        });
    
        // Initialize theme on page load
        updateTheme();
    


   

        let currentLang = localStorage.getItem('lang') || 'fr'; // Définit 'fr' comme langue par défaut

        document.addEventListener('DOMContentLoaded', () => {
            updateLanguage();
        });

        const translations = {
            en: {
                heroBadge: "Next-Generation Template Generator",
                heroTitle: "Create Stunning Templates",
                heroDescription: "Transform your ideas into professional templates. Customize, modify, and export in just a few clicks.",
                btnStart: "Get Started",
                btnLearnMore: "Learn More",
            },
            fr: {
                heroBadge: "Générateur de Templates Nouvelle Génération",
                heroTitle: "Créez des Templates Magnifiques",
                heroDescription: "Transformez vos idées en templates professionnels. Personnalisez, modifiez et exportez en quelques clics.",
                btnStart: "Commencer",
                btnLearnMore: "En savoir plus",
            }
        };

            

                const langDropdownItems = document.querySelectorAll('.dropdown-item');

                langDropdownItems.forEach(item => {
                    item.addEventListener('click', (event) => {
                        event.preventDefault();
                        const selectedLang = item.getAttribute('data-lang');
                        currentLang = selectedLang;
                        localStorage.setItem('lang', currentLang);
                        updateLanguage();
                    });
                });
                const updateLanguage = () => {
                    console.log("Updating language to:", currentLang);
                    const elements = document.querySelectorAll('[data-translate]');
                    elements.forEach(el => {
                        const key = el.getAttribute('data-translate');
                        console.log("Translating key:", key);
                        if (translations[currentLang] && translations[currentLang][key]) {
                            el.textContent = translations[currentLang][key];
                        }
                    });
                };



                // Language toggle
       
    </script>
</body>

</html>


