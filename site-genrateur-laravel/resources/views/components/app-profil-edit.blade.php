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
        :root {
            --primary: #3B82F6;
            --primary-dark: #2563EB;
            --secondary: #F97316;
            --accent: #2563EB;
            --light: #F8FAFC;
            --dark: #1E293B;
            --transition: all 0.3s ease;
            --radius: 12px;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .dark-mode {
            --light: #0F172A;
            --dark: #F1F5F9;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            --shadow-hover: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            transition: var(--transition);
            line-height: 1.6;
        }

        /* Enhanced navbar */
        .navbar {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.95);
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 0.8rem 1rem;
        }

        .dark-mode .navbar {
            background-color: rgba(15, 23, 42, 0.95);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            font-weight: 800;
            color: var(--primary);
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 600;
            color: var(--dark);
            position: relative;
            padding: 0.5rem 1rem;
            transition: var(--transition);
            border-radius: var(--radius);
        }

        .nav-link:hover {
            background-color: rgba(59, 130, 246, 0.1);
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
            width: 70%;
        }

        /* Profile section improvements */
        .profile-section {
            min-height: 100vh;
            padding: 100px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .profile-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: auto;
            background: radial-gradient(circle at top right, rgba(59, 130, 246, 0.1), transparent 70%);
            z-index: -1;
        }

        .dark-mode .profile-section::before {
            background: radial-gradient(circle at top right, rgba(59, 130, 246, 0.05), transparent 70%);
        }

        /* Enhanced profile card */
        .profile-card {
            background-color: white;
            border-radius: var(--radius);
            padding: 2rem;
            transition: var(--transition);
            border: none;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
            overflow: hidden;
            position: relative;
        }

        .profile-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary), var(--accent));
            transition: var(--transition);
        }

        .dark-mode .profile-card {
            background-color: rgba(30, 41, 59, 0.7);
            box-shadow: var(--shadow);
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .profile-card:hover::before {
            width: 7px;
        }

        .profile-header {
            margin-bottom: 2rem;
            position: relative;
        }

        .profile-title {
            font-size: 1.75rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            display: inline-block;
        }

        .profile-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 2px;
        }

        .profile-subtitle {
            font-size: 1rem;
            color: var(--dark);
            opacity: 0.8;
            margin-top: 1.5rem;
        }

        .dark-mode .profile-subtitle {
            color: var(--dark);
        }

        /* Form improvements */
        .form-group {
            margin-bottom: 1.75rem;
            position: relative;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--dark);
            display: flex;
            align-items: center;
            transition: var(--transition);
        }

        .form-label i {
            margin-right: 0.5rem;
            color: var(--primary);
            font-size: 1.1rem;
        }

        .dark-mode .form-label {
            color: var(--dark);
        }

        .form-control {
            border-radius: 10px;
            padding: 0.85rem 1.25rem;
            border: 2px solid rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            font-weight: 500;
        }

        .dark-mode .form-control {
            background-color: rgba(15, 23, 42, 0.4);
            border-color: rgba(255, 255, 255, 0.1);
            color: var(--dark);
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            transform: translateY(-2px);
        }

        /* Button enhancements */
        .btn {
            border-radius: 10px;
            padding: 0.85rem 1.75rem;
            font-weight: 600;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border: none;
            color: white;
            box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(59, 130, 246, 0.4);
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
        }

        .btn-danger {
            background: linear-gradient(135deg, #EF4444, #DC2626);
            border: none;
            color: white;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
        }

        .btn-danger:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(239, 68, 68, 0.4);
        }

        /* Alert improvements */
        .alert {
            border-radius: 10px;
            padding: 1.25rem 1.5rem;
            margin-bottom: 1.5rem;
            border: none;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .alert i {
            font-size: 1.25rem;
        }

        .alert-success {
            background-color: rgba(16, 185, 129, 0.15);
            color: #065F46;
        }

        .dark-mode .alert-success {
            background-color: rgba(16, 185, 129, 0.2);
            color: #6EE7B7;
        }

        .alert-error {
            background-color: rgba(239, 68, 68, 0.15);
            color: #7F1D1D;
        }

        .dark-mode .alert-error {
            background-color: rgba(239, 68, 68, 0.2);
            color: #FCA5A5;
        }

        /* Animation improvements */
        .animate-fade-up {
            animation: fadeUp 0.6s ease forwards;
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

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }

        /* Responsive improvements */
        @media (max-width: 991.98px) {
            .navbar {
                padding: 0.7rem 0.5rem;
            }

            .nav-link {
                padding: 0.5rem 0.75rem;
                margin: 0.15rem 0;
            }

            .profile-section {
                padding: 90px 0 40px;
            }
        }

        @media (max-width: 767.98px) {
            .profile-section {
                padding: 80px 0 30px;
            }

            .profile-title {
                font-size: 1.5rem;
            }

            .profile-card {
                padding: 1.5rem;
            }

            .btn {
                width: 100%;
                margin-bottom: 0.5rem;
            }

            .btn-group .btn {
                width: auto;
            }
        }

        @media (max-width: 575.98px) {
            .profile-title {
                font-size: 1.35rem;
            }

            .profile-card {
                padding: 1.25rem;
                border-radius: 12px;
            }

            .form-control {
                padding: 0.75rem 1rem;
            }
        }

        /* Utility classes */
        .text-gradient {
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hover-lift {
            transition: var(--transition);
        }

        .hover-lift:hover {
            transform: translateY(-3px);
        }

        /* Enhanced Input Styles */
        .input-container {
            position: relative;
            margin-bottom: 1.75rem;
        }

        .input-field {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: white;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .dark-mode .input-field {
            background-color: rgba(15, 23, 42, 0.4);
            border-color: rgba(255, 255, 255, 0.1);
            color: var(--dark);
        }

        .input-label {
            position: absolute;
            top: 1rem;
            left: 1.25rem;
            font-size: 1rem;
            font-weight: 500;
            color: #6B7280;
            pointer-events: none;
            transition: all 0.3s ease;
            background-color: white;
            padding: 0 0.25rem;
        }

        .dark-mode .input-label {
            background-color: rgba(15, 23, 42, 0.4);
            color: #9CA3AF;
        }

        .input-field:focus,
        .input-field:not(:placeholder-shown) {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            outline: none;
        }

        .input-field:focus + .input-label,
        .input-field:not(:placeholder-shown) + .input-label {
            top: -0.5rem;
            left: 0.75rem;
            font-size: 0.875rem;
            color: var(--primary);
            font-weight: 600;
        }

        .input-error {
            margin-top: 0.5rem;
            font-size: 0.875rem;
            color: #EF4444;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .input-error i {
            font-size: 1rem;
        }

        .input-hint {
            margin-top: 0.5rem;
            font-size: 0.875rem;
            color: #6B7280;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .dark-mode .input-hint {
            color: #9CA3AF;
        }

        .input-hint i {
            font-size: 1rem;
            color: var(--primary);
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6B7280;
            cursor: pointer;
            padding: 0.25rem;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: var(--primary);
        }

        .textarea-field {
            min-height: 120px;
            resize: vertical;
        }

        /* Floating label animation */
        .floating-label {
            position: relative;
        }

        .floating-label .input-field {
            padding-top: 1.5rem;
            padding-bottom: 0.75rem;
        }

        .floating-label .input-label {
            top: 0.75rem;
            font-size: 1rem;
        }

        .floating-label .input-field:focus + .input-label,
        .floating-label .input-field:not(:placeholder-shown) + .input-label {
            top: 0.25rem;
            font-size: 0.75rem;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="profile-section">
        <x-acceuil.header />

        <div class="container py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                {{ $slot }}
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Enhanced dark mode toggle with smoother transition
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;

        // Check saved theme in localStorage
        let isDark = localStorage.getItem('theme') === 'dark';

        const updateTheme = () => {
            // Add transition class for smooth change
            body.style.transition = 'background-color 0.3s ease, color 0.3s ease';

            if (isDark) {
                body.classList.add('dark-mode');
                if (darkModeToggle) {
                    darkModeToggle.querySelector('i').setAttribute('data-lucide', 'moon');
                    darkModeToggle.setAttribute('aria-label', 'Switch to light mode');
                }
                localStorage.setItem('theme', 'dark');
            } else {
                body.classList.remove('dark-mode');
                if (darkModeToggle) {
                    darkModeToggle.querySelector('i').setAttribute('data-lucide', 'sun');
                    darkModeToggle.setAttribute('aria-label', 'Switch to dark mode');
                }
                localStorage.setItem('theme', 'light');
            }
            lucide.createIcons(); // Reinitialize icons

            // Remove transition after animation completes
            setTimeout(() => {
                body.style.transition = '';
            }, 300);
        };

        if (darkModeToggle) {
            darkModeToggle.addEventListener('click', () => {
                isDark = !isDark;
                updateTheme();
            });
        }

        // Initialize theme on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateTheme();

            // Add animation classes to elements
            setTimeout(() => {
                const animatedElements = document.querySelectorAll('.animate-fade-up');
                animatedElements.forEach(el => {
                    el.style.opacity = '0';
                    el.classList.add('animate-fade-up');
                });
            }, 100);

            // Initialize password toggle functionality
            initPasswordToggle();

            // Initialize floating labels
            initFloatingLabels();
        });

        // Password toggle functionality
        function initPasswordToggle() {
            document.querySelectorAll('.password-toggle').forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                    input.setAttribute('type', type);

                    // Toggle icon
                    const icon = this.querySelector('i');
                    if (type === 'password') {
                        icon.setAttribute('data-lucide', 'eye');
                    } else {
                        icon.setAttribute('data-lucide', 'eye-off');
                    }
                    lucide.createIcons();
                });
            });
        }

        // Floating labels functionality
        function initFloatingLabels() {
            document.querySelectorAll('.floating-label .input-field').forEach(input => {
                // Check if the input has value on page load
                if (input.value) {
                    input.classList.add('has-value');
                }

                input.addEventListener('focus', () => {
                    input.classList.add('focused');
                });

                input.addEventListener('blur', () => {
                    if (!input.value) {
                        input.classList.remove('focused', 'has-value');
                    } else {
                        input.classList.remove('focused');
                        input.classList.add('has-value');
                    }
                });
            });
        }

        // Language functionality
        let currentLang = localStorage.getItem('lang') || 'fr';

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

        // Function to update language if needed
        function updateLanguage() {
            // Implementation would go here based on your application needs
        }
    </script>
</body>

</html>




