<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenGront - Générateur de Templates</title>

    <link rel="stylesheet" href="{{ asset('css/info-site.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<style>
    :root {
        --primary: #e84545;
        --secondary: #e84545;
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
        color: white;
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

    .dark-mode .nav-link:hover {
        font-weight: 600;
        color: white;
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
        padding: 70px 0;
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
    }

    .dark-mode .hero-image {}

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

    @media (max-width: 991.98px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .hero-section {
            padding: 60px 0;
        }

        .pricing-card,
        .review-card {
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

    .delay-1 {
        animation-delay: 0.2s;
    }

    .delay-2 {
        animation-delay: 0.4s;
    }

    .delay-3 {
        animation-delay: 0.6s;
    }
</style>

<body>
    <!-- Navbar -->
    <x-acceuil.header />

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="modal-container">
            <form action="{{ route('generate.site') }}" method="POST" enctype="multipart/form-data"
                id="site-generator-form">
                @csrf

                <!-- Progress Bar -->
                {{-- <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="max-height: 10px" style="width: 0%"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}

                <!-- Nouveau code personnalisé -->
                <div class="custom-progress-container">
                    <div class="custom-progress-bar" style="width: 0%"></div>
                </div>

                <!-- Step 1: Basic Information -->
                <div class="step active">
                    <h5 class="step-title">Step 1: Basic Information</h4>

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="site_name" class="form-label">Website Name</label>
                                    <input type="text" class="form-control custom-input" id="site_name"
                                        name="site_name" placeholder="Enter your website name">
                                </div>
                                <div class="mb-3">
                                    <label for="contact_phone" class="form-label">Contact Phone</label>
                                    <input type="text" class="form-control custom-input" id="contact_phone"
                                        name="contact_phone" placeholder="Enter your contact phone">
                                </div>
                                <div class="mb-3">
                                    <label for="contact_email" class="form-label">Contact Email</label>
                                    <input type="email" class="form-control custom-input" id="contact_email"
                                        name="contact_email" placeholder="Enter your contact email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="upload-container">
                                    <label for="logo" class="form-label">Upload Logo</label>
                                    <div class="proof">
                                        <div class="imgArea">
                                            <input type="file" name="logo" id="screenshoot" hidden
                                                accept="image/*" />
                                            <div class="upload-instructions" id="upload-instructions">
                                                <i class="fa-solid fa-cloud-arrow-up upload-icon"></i>
                                                <h4>Drag and Drop</h4>
                                                <p>Image size must be less than <span>2MB</span></p>
                                            </div>
                                    
                                        </div>
                                        <button class="selectImage btn-upload" type="button">Select Image</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Step 2: Template Selection -->
                <div class="step">
                    <h4 class="mb-4 step-title">Step 2: Choose a Template</h4>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <img src="images/template 1.png" alt="Template 1" class="img-thumbnail template-preview"
                                    style="background-color: transparent; " data-template="template1">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="images/template 2.png" alt="Template 2" class="img-thumbnail template-preview"
                                    style="background-color: transparent; " data-template="template2">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="images/template 3.png" alt="Template 3"
                                    class="img-thumbnail template-preview" style="background-color: transparent;"
                                    data-template="template3">
                            </div>
                        </div>
                    </div>

                    <!-- Template Preview -->
                    <div class="mb-3 text-center">
                        <h5 >Template Preview <i class="fas fa-eye me-2 mr-4"  style="cursor: pointer;"></i></h5>
                        <iframe id="template-preview-frame" class="w-100 template-iframe" src="templateviews/template1"></iframe>
                    </div>
                </div>

                <!-- Step 3: Additional Features -->
                <div class="step">
                    <h4 class="mb-4 step-title">Step 3: Additional Description</h4>
                    <div class="mb-3">
                        <textarea class="form-control custom-textarea" placeholder="Enter description about your website" rows="4"
                            name="site_description"></textarea>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control custom-textarea" placeholder="Enter your address" rows="4" name="address"></textarea>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="form-footer">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>

                <!-- Hidden field to store template_type -->
                <input type="hidden" id="template_type" name="template_type" value="">
            </form>
        </div>
    </section>

    <script src="{{ asset('js/info-site.js') }}"></script>
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
            lucide.createIcons();
        };

        darkModeToggle.addEventListener('click', () => {
            isDark = !isDark;
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateTheme();
        });

        // Initialize theme on page load
        updateTheme();

        // Language handling
        let currentLang = localStorage.getItem('lang') || 'fr';

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
            const elements = document.querySelectorAll('[data-translate]');
            elements.forEach(el => {
                const key = el.getAttribute('data-translate');
                if (translations[currentLang] && translations[currentLang][key]) {
                    el.textContent = translations[currentLang][key];
                }
            });
        };

        // Animation lors du changement d'étape
        function animateStepChange(step) {
            const steps = document.querySelectorAll('.step');
            steps.forEach((s, index) => {
                if (index === step) {
                    s.style.display = 'block';
                    setTimeout(() => {
                        s.style.opacity = '1';
                        s.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    s.style.opacity = '0';
                    s.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        s.style.display = 'none';
                    }, 300);
                }
            });
        }
    </script>
</body>

</html>