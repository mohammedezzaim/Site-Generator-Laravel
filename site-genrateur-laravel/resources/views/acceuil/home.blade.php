<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenGront - Générateur de Templates</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

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

        .dark-mode .nav-link :hover{
            color: rgb(0, 0, 0);
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
            color: transparent;
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
            box-shadow: 0 20px 40px rgba(254, 252, 252, 0.1);
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

        .hover-scale {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hover-scale:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)!important;
}

.bg-gradient-primary {
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
}

.bg-gradient-success {
    background: linear-gradient(135deg, #10b981, #059669);
}

.list-check {
    list-style: none;
    padding-left: 0;
}
.list-check li {
    padding-left: 1.75rem;
    margin-bottom: 0.75rem;
    position: relative;
}
.list-check li:before {
    content: "\f00c";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    left: 0;
    color: #10b981;
}

.hover-lift {
    transition: transform 0.2s ease;
}
.hover-lift:hover {
    transform: translateY(-2px);
}

.bg-gold {
    background: linear-gradient(45deg, #FFD700, #D4AF37);
}

.ribbon {
    position: absolute;
    right: -1px;
    top: -1px;
    z-index: 1;
    overflow: hidden;
    width: 100px;
    height: 100px;
    text-align: right;
}
.ribbon span {
    transform: rotate(45deg);
    position: relative;
    display: inline-block;
    width: 140px;
    padding: 7px 0;
    top: 15px;
    right: -30px;
}

        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <x-acceuil.header />

    <!-- Hero Section -->
    <section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 animate-fade-up">
                <span class="hero-badge" data-translate="heroBadge">Générateur de Templates Nouvelle Génération</span>
                <h1 class="hero-title" data-translate="heroTitle">Créez des Templates Magnifiques</h1>
                <p class="hero-description" data-translate="heroDescription">
                    Transformez vos idées en templates professionnels. Personnalisez, modifiez et exportez en quelques clics.
                </p>
                <div class="d-flex gap-3">                                            
                    @if (Auth()->check())                        
                        <a href="#pricing" class="btn btn-custom btn-primary" data-translate="btnStart">
                            Commencer
                        </a>
                    @else                                                 
                        <a href="#loginModal2" class="btn btn-custom btn-primary" data-toggle="modal" data-translate="btnStart">
                            Commencer
                        </a>
                    @endif                                           
                    <button type="button" 
                            class="btn btn-custom btn-outline" 
                            data-bs-toggle="modal" 
                            data-bs-target="#videoModal"
                            data-translate="btnLearnMore">
                        Comment Cree un projet
                    </button>
                </div>
            </div>
            <div class="col-lg-6 animate-fade-up delay-1">
                <div class="hero-image">
                    <img src="https://images.pexels.com/photos/3182773/pexels-photo-3182773.jpeg" 
                         alt="Template Generator" 
                         class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header bg-gradient-primary text-white rounded-top-4">
                <h3 class="modal-title fw-bold">Créer un Nouveau Projet</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-4">
                    <!-- Carte Projet Payant -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-lg hover-scale">
                            <div class="card-header bg-gradient-primary text-white py-4">
                                <h4 class="mb-0 fw-bold"><i class="fas fa-crown me-2"></i>Premium</h4>
                                <span class="opacity-75">Toutes les fonctionnalités avancées</span>
                            </div>
                            <div class="card-body position-relative">
                                <div class="ribbon ribbon-top-end"><span class="badge bg-gold">Populaire</span></div>
                                <div class="ratio ratio-16x9 mb-4 rounded-3 overflow-hidden">
                                    <video controls class="w-100" poster="{{ asset('images/premium-thumbnail.jpg') }}">
                                        <source src="{{ asset('video/premium.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <ul class="list-check mb-4">
                                    <li>Analytics avancés</li>
                                    <li>Support prioritaire 24/7</li>
                                    <li>Thèmes personnalisés</li>
                                    <li>+20 fonctionnalités premium</li>
                                </ul>
                                  <a class="btn btn-primary py-3 w-100 fw-bold hover-lift" href="{{ route('gener-sit-web-premium') }}">
                                    <i class="fas fa-magic me-2"></i>Démarrer (9.99€/mois)
                                </a>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Carte Projet Gratuit -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-lg hover-scale">
                            <div class="card-header bg-gradient-success text-white py-4">
                                <h4 class="mb-0 fw-bold"><i class="fas fa-seedling me-2"></i>Gratuit</h4>
                                <span class="opacity-75">Parfait pour débuter</span>
                            </div>
                            <div class="card-body">
                                <div class="ratio ratio-16x9 mb-4 rounded-3 overflow-hidden">
                                    <video controls class="w-100" poster="{{ asset('images/free-thumbnail.jpg') }}">
                                        <source src="{{ asset('video/free.mp4') }}" type="video/mp4">
                                    </video>
                                </div>
                                <ul class="list-check mb-4">
                                    <li>Fonctionnalités de base</li>
                                    <li>Support communautaire</li>
                                    <li>1 projet actif</li>
                                    <li>Personnalisation limitée</li>
                                </ul>
                                <a class="btn btn-success py-3 w-100 fw-bold hover-lift" href="{{ route('gener-sit-web') }}">
                                    <i class="fas fa-magic me-2"></i>Commencer Gratuitement
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script>
document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
    const video = document.getElementById('docVideo');
    video.pause();
    video.currentTime = 0;
});

document.getElementById('videoModal').addEventListener('show.bs.modal', function () {
    const video = document.getElementById('docVideo');
    video.play().catch(error => {
        console.log('La lecture automatique a été bloquée:', error);
    });
});
</script>

    <!-- Pricing Section -->
    <section id="pricing" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold mb-3">Choisissez votre plan</h2>
                <p class="lead">Des options flexibles pour tous vos besoins</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3 class="h2 mb-3">Gratuit</h3>
                            <div class="price">0€</div>
                            <div class="price-period">/mois</div>
                        </div>
                        
                        <ul class="feature-list">
                            <li class="feature-item">
                                <i data-lucide="check" class="feature-icon"></i>
                                5 templates de base
                            </li>
                            <li class="feature-item">
                                <i data-lucide="check" class="feature-icon"></i>
                                Personnalisation limitée
                            </li>
                            <li class="feature-item">
                                <i data-lucide="check" class="feature-icon"></i>
                                Export en qualité standard
                            </li>
                            <li class="feature-item">
                                <i data-lucide="check" class="feature-icon"></i>
                                Support communautaire
                            </li>
                        </ul>
                        
                        <a href="{{ route('gener-sit-web') }}" class="btn btn-custom btn-outline w-100">                            
                            Commencer gratuitement
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="pricing-card" style="background: linear-gradient(135deg, var(--primary), var(--accent));">
                        <div class="pricing-header border-0">
                            <h3 class="h2 mb-3 text-white">Premium</h3>
                            <div class="price text-white">19.99€</div>
                            <div class="price-period text-white opacity-75">/mois</div>
                        </div>
                        
                        <ul class="feature-list">
                            <li class="feature-item text-white">
                                <i data-lucide="check" class="feature-icon text-white"></i>
                                Tous les templates premium
                            </li>
                            <li class="feature-item text-white">
                                <i data-lucide="check" class="feature-icon text-white"></i>
                                Personnalisation illimitée
                            </li>
                            <li class="feature-item text-white">
                                <i data-lucide="check" class="feature-icon text-white"></i>
                                Export haute qualité
                            </li>
                            <li class="feature-item text-white">
                                <i data-lucide="check" class="feature-icon text-white"></i>
                                Support prioritaire 24/7
                            </li>
                            <li class="feature-item text-white">
                                <i data-lucide="check" class="feature-icon text-white"></i>
                                Stockage cloud illimité
                            </li>
                        </ul>
                        
                        <a class="btn btn-custom w-100" style="background: white; color: var(--primary);" href="{{ route('gener-sit-web-premium') }}">
                            <i class="fas fa-magic me-2"></i>Passer au Premium 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold mb-3">Ce que disent nos clients</h2>
                <p class="lead">Des milliers d'utilisateurs satisfaits</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="review-card">
                        <img src="images/team-5.jpg" 
                             alt="Chafai Ismail" 
                             class="review-avatar">
                        <h4 class="review-author">Chafai Ismail</h4>
                        <p class="review-role">Full Stack Developer</p>
                        <p class="review-text">
                            "GenGront a révolutionné ma façon de créer des templates. L'interface est intuitive et les résultats sont professionnels."
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <div class="review-card">
                        <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg" 
                             alt="Thomas Dubois" 
                             class="review-avatar">
                        <h4 class="review-author">Thomas Dubois</h4>
                        <p class="review-role">Entrepreneur</p>
                        <p class="review-text">
                            "Un outil indispensable pour mon entreprise. La version premium offre un excellent rapport qualité-prix."
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <div class="review-card">
                        <img src="images/team-6.jpg" 
                             alt="Mohammed Ezzaim" 
                             class="review-avatar">
                        <h4 class="review-author">Mohammed Ezzaim</h4>
                        <p class="review-role">Directrice Marketing</p>
                        <p class="review-text">
                            "Grâce à GenGront, notre équipe marketing peut créer des landing pages rapidement et efficacement."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-card">
                        <div class="stat-number" data-count="15000">0</div>
                        <div class="stat-label">Utilisateurs Actifs</div>
                    </div>
                </div>
                
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-card">
                        <div class="stat-number" data-count="5000">0</div>
                        <div class="stat-label">Templates Créés</div>
                    </div>
                </div>
                
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-card">
                        <div class="stat-number" data-count="25000">0</div>
                        <div class="stat-label">Téléchargements</div>
                    </div>
                </div>
                
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number" data-count="40">0</div>
                        <div class="stat-label">Pays</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3 class="footer-title">GenGront</h3>
                    <p class="mb-4">
                        Créez des templates professionnels facilement. Notre plateforme vous offre tous les outils nécessaires pour réussir.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i data-lucide="facebook"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i data-lucide="twitter"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i data-lucide="instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i data-lucide="linkedin"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h4 class="footer-title">Navigation</h4>
                    <a href="#" class="footer-link">Accueil</a>
                    <a href="#features" class="footer-link">Fonctionnalités</a>
                    <a href="#pricing" class="footer-link">Tarifs</a>
                    <a href="#contact" class="footer-link">Contact</a>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h4 class="footer-title">Ressources</h4>
                    <a href="#" class="footer-link">Blog</a>
                    <a href="#" class="footer-link">Documentation</a>
                    <a href="#" class="footer-link">Tutoriels</a>
                    <a href="#" class="footer-link">Support</a>
                </div>
                
                <div class="col-lg-4">
                    <h4 class="footer-title">Contact</h4>
                    <div class="contact-info">
                        <i data-lucide="map-pin" class="contact-icon"></i>
                        123 Rue du Template, 75001 Paris
                    </div>
                    <div class="contact-info">
                        <i data-lucide="phone" class="contact-icon"></i>
                        +33 1 23 45 67 89
                    </div>
                    <div class="contact-info">
                        <i data-lucide="mail" class="contact-icon"></i>
                        contact@gengront.com
                    </div>
                </div>
            </div>
            
            <hr class="my-5">
            
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <p class="mb-0">&copy; 2025 GenGront. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="footer-link d-inline-block me-3">Politique de confidentialité</a>
                    <a href="#" class="footer-link d-inline-block me-3">Conditions d'utilisation</a>
                    <a href="#" class="footer-link d-inline-block">Mentions légales</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const heroTitleElement = document.querySelector('.hero-title');
    const targetText = "Créez des Templates Magnifiques";
    const typingSpeed = 150; // Délai en millisecondes entre chaque caractère

    if (heroTitleElement) {
        typeWriter(heroTitleElement, targetText, typingSpeed);
    }
});

function typeWriter(element, text, speed) {
    let i = 0;
    element.textContent = ''; // Efface le contenu initial
    function write() {
        if (i < text.length) {
            element.textContent += text.charAt(i);
            i++;
            setTimeout(write, speed);
        }
    }
    write();
}
</script>
</body>
</html>