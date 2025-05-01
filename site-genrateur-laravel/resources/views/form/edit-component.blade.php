<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Append Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('template1/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('template1/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template1/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('template1/assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/info-site.css') }}">

    <style>
        /* Animation styles */
        @keyframes flicker {
            0% { opacity: 1; }
            50% { opacity: 0.6; }
            100% { opacity: 1; }
        }

        @keyframes fade {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Edit icon styling */
        .edit-icon {
            /* position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center; */
            font-size: 24px;
            cursor: pointer;
            color: #0d6efd;
            /* border-radius: 50%; */
            /* padding: 6px; */
            transition: all 0.3s ease;
            animation:  2s infinite;
            /* background-color: rgba(255, 255, 255, 0.8); */
            /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */
            z-index: 100;
        }

        

        /* Icon selection grid */
        .icon-item {
            cursor: pointer;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 1.5rem;
        }

        .icon-item:hover {
            background-color: #f0f7ff;
            transform: scale(1.1);
            color: #0d6efd;
        }

        .icon-item.selected {
            background-color: #e6f0ff;
            border: 2px solid #0d6efd;
            color: #0d6efd;
        }

        .icon-grid {
            max-height: 200px;
            overflow-y: auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
            gap: 10px;
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            background-color: #f8f9fa;
        }

        /* Draggable form modal */
        .draggable-div {
            position: fixed;
            width: 400px;
            max-width: 95%;
            background: rgba(25, 25, 25, 0.98);
            border-radius: 12px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.1);
            z-index: 1000;
            cursor: move;
            user-select: none;
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            transform: translate(-50%, -50%);
            overflow: hidden;
            transition: box-shadow 0.3s ease, transform 0.2s ease;
        }

        .draggable-div .card {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }

        .draggable-modal {
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            background-color: rgba(255, 255, 255, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Form styling */
        .form-group {
            padding: 20px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.12);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
            color: #fff;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .form-label {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-check-label {
            color: rgba(255, 255, 255, 0.9);
        }

        .form-check-input {
            border-color: rgba(255, 255, 255, 0.5);
        }

        .form-check-input:checked {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        /* Custom section styling */
        .border-rounded {
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 15px;
            margin-bottom: 20px;
        }

        /* Upload area styling */
        .proof {
            border-radius: 8px;
            overflow: hidden;
        }

        .imgArea_logo, .imgArea_image1 {
            transition: all 0.3s ease;
            border: 2px dashed rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        .imgArea_logo:hover, .imgArea_image1:hover {
            border-color: #0d6efd;
            background-color: rgba(13, 110, 253, 0.1);
        }

        /* Button styling */
        .btn {
            border-radius: 6px;
            font-weight: 500;
            padding: 8px 16px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(11, 94, 215, 0.3);
        }

        .btn-success {
            background-color: #198754;
            border-color: #198754;
        }

        .btn-success:hover {
            background-color: #157347;
            border-color: #146c43;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(21, 115, 71, 0.3);
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 3px;
        }

        /* Section highlight on edit */
        .highlight-section {
            position: relative;
        }

        .highlight-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            border: 2px dashed rgba(13, 110, 253, 0.5);
            border-radius: 4px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .highlight-section:hover::after {
            opacity: 1;
        }

        /* Service item hover effect */
        .service-item {
            transition: all 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Icon box hover effect */
        .icon-box {
            transition: all 0.3s ease;
            border-radius: 8px;
            padding: 20px;
        }

        .icon-box:hover {
            background-color: rgba(13, 110, 253, 0.05);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        /* Footer social links */
        .social-links a {
            transition: all 0.3s ease;
            margin-right: 10px;
        }

        .social-links a:hover {
            transform: translateY(-3px);
        }
    </style>
</head>

<body class="index-page">
    <!-- Header Section -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div id="navmenu" class="container-fluid position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" id="logo_id" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1 class="sitename">Append</h1><span>.</span>
            </a>

            <nav class="navmenu">
                <ul>
                    <li><a href="index.html#hero" class="active">Home</a></li>
                    <li><a href="index.html#about">About</a></li>
                    <li><a href="index.html#services">Services</a></li>
                    <li><a href="index.html#portfolio">Portfolio</a></li>
                    <li><a href="index.html#pricing">Pricing</a></li>
                    <li><a href="index.html#team">Team</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>                  
                    <li><a href="index.html#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" id="getstarted" href="index.html#about">Get Started</a>

            
        </div>

        <div class="edit-icon" onclick="toggleForm('formulaire1')">
                <i class="bi bi-pencil-square fs-3 text-primary"></i>
            </div>
    </header>

    <main class="main">
        <!-- Form Container -->        
        <div id="formulaire" style="display:none; margin-top: 20px; width: 450px; height: 80%; background-color: rgba(10, 2, 2, 0.9); border-radius: 16px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1000; padding: 0;">
            <div class="draggable-modal" id="divHeader">
                <button type="button" class="btn-close bg-light rounded-circle" aria-label="Close" onclick="closeForm('formulaire1')" style="width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;"></button>
            </div>
            
            <form id="site-generator-form" action="" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Navbar Customization Form -->
                <div id="formulaire1" class="form-group position-relative" style="max-height: 300px; overflow-y: auto; padding: 20px;">
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation de la Navbar</h1>

                    <!-- Elements to Delete Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="mb-3 text-white">Éléments à supprimer :</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check mb-2">
                                    <input class="form-check-input delete-checkbox" type="checkbox" value="logo_id" id="deleteLogo">
                                    <label class="form-check-label" for="deleteLogo">Supprimer le logo</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input delete-checkbox" type="checkbox" value="getstarted" id="deleteNavButton">
                                    <label class="form-check-label" for="deleteNavButton">Supprimer le bouton</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="elements_to_delete" id="elementsToDelete" value="">
                    </div>

                    <!-- Basic Configuration Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="mb-3 text-white">Configuration de base</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="dataNav" class="form-label">Éléments de menu</label>
                                <input type="text" id="dataNav" name="dataNav" class="form-control" 
                                    value="Home, About, Services, Portfolio, Pricing, Team, Blog, Contact">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="btnNav" class="form-label">Texte du bouton</label>
                                <input type="text" id="btnNav" name="btnNav" class="form-control" value="Get Start">
                            </div>
                        </div>
                    </div>

                    <!-- Appearance Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="mb-3 text-white">Apparence</h5>
                        <div class="row">
                            <!-- Colors -->
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Couleur de fond</label>
                                <input type="color" id="navColor" name="navColor" value="#000000" 
                                    class="form-control form-control-color w-100">
                            </div>
                            
                            <!-- Transparency -->
                            <div class="col-md-4 mb-3">
                                <label for="navOpacity" class="form-label">Opacité (%)</label>
                                <input type="range" id="navOpacity" name="navOpacity" class="form-range" 
                                    min="0" max="100" value="0">
                            </div>

                            <!-- Shadow -->
                            <div class="col-md-4 mb-3">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="navShadow">
                                    <label class="form-check-label" for="navShadow">Activer l'ombre</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Typography Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="mb-3 text-white">Typographie</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="fontFamily" class="form-label">Police d'écriture</label>
                                <select class="form-select form-control"  id="fontFamily" name="fontFamily">
                                    <option value="Arial, sans-serif" style="color: black;">Arial</option>
                                    <option value="Helvetica, sans-serif" style="color: black;">Helvetica</option>
                                    <option value="'Times New Roman', serif" style="color: black;">Times New Roman</option>
                                    <option value="'Courier New', monospace" style="color: black;">Courier New</option>
                                    <option value="Georgia, serif" style="color: black;">Georgia</option>
                                    <option value="Verdana, sans-serif" style="color: black;">Verdana</option>
                                    <option value="Tahoma, sans-serif" style="color: black;">Tahoma</option>
                                    <option value="'Trebuchet MS', sans-serif" style="color: black;">Trebuchet MS</option>
                                    <option value="Impact, sans-serif" style="color: black;">Impact</option>
                                    <option value="'Arial Black', sans-serif" style="color: black;">Arial Black</option>
                                    <option value="'Palatino Linotype', serif" style="color: black;">Palatino</option>
                                    <option value="'Lucida Sans Unicode', sans-serif" style="color: black;">Lucida Sans</option>
                                    <option value="'Comic Sans MS', cursive" style="color: black;">Comic Sans MS</option>
                                    <option value="'Century Gothic', sans-serif" style="color: black;">Century Gothic</option>
                                    <option value="'Segoe UI', sans-serif" style="color: black;">Segoe UI</option>
                                </select>
                            </div>
                                
                            <div class="col-md-4 mb-3">
                                <label for="fontSize" class="form-label">Taille de police (px)</label>
                                <input type="number" id="fontSize" name="fontSize" class="form-control" 
                                    min="10" max="24" value="16">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="fontColor" class="form-label">Couleur du texte</label>
                                <input type="color" id="fontColor" name="fontColor" value="#ffffff" 
                                    class="form-control form-control-color w-100">
                            </div>
                        </div>
                    </div>

                    <!-- Logo Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="mb-3 text-white">Gestion du logo</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Upload Logo</label>
                                <div class="proof rounded">
                                    <div class="imgArea_logo rounded p-3 text-center bg-dark bg-opacity-25" data-title="" 
                                        style="cursor: pointer;">
                                        <input type="file" name="srcLogo" id="screenshoot_logo" hidden accept="image/*">
                                        <i class="bi bi-cloud-upload text-primary fs-3 mb-2"></i>
                                        <h4 class="fs-5 mt-2 text-white">Upload screenshot</h4>
                                        <p class="text-muted small">image size must be less than <span class="text-danger fw-bold">2MB</span></p>
                                    </div>
                                    <button class="btn_logo btn btn-primary w-100 mt-3" type="button">
                                        <i class="bi bi-image me-2"></i>Select image
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="logoSize" class="form-label text-center w-100">Taille du logo (px)</label>
                                    <input type="range" id="logoSize" name="logoSize" class="form-range w-100" 
                                        min="50" max="200" value="100">
                                    <div class="d-flex justify-content-between">
                                        <span class="text-white-50">50px</span>
                                        <span class="text-white-50">200px</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Hero Section Form -->
                <div id="formulaire2" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">                      
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation du Hero</h1>
                    
                    <!-- Elements to Delete Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="text-white mb-3">Éléments à supprimer :</h5>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="hero-title" id="deleteHeroTitle">
                            <label class="form-check-label" for="deleteHeroTitle">
                                Supprimer le titre principal
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="hero-description" id="deleteHeroDesc">
                            <label class="form-check-label" for="deleteHeroDesc">
                                Supprimer la description
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="formular_hero" id="deleteHeroFomular">
                            <label class="form-check-label" for="deleteHeroFomular">
                                Supprimer la Formular Search
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="DescTitle" class="form-label">Titre principal :</label>
                        <input type="text" id="DescTitle" name="DescTitle" class="form-control"
                            placeholder="Welcome to Our Website">
                    </div>
                    
                    <div class="mb-3">
                        <label for="Desceription" class="form-label">Description :</label>
                        <textarea id="Desceription" name="Desceription" class="form-control" rows="3"
                            placeholder="Description ici..."></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="image1" class="form-label fw-bold text-white mb-2">Image d'arrière-plan</label>
                        <div class="proof p-3 bg-dark bg-opacity-25 rounded border border-secondary">
                            <div class="imgArea_image1 text-center p-4 bg-dark bg-opacity-10 rounded mb-3" data-title="">
                                <input type="file" id="image1" name="image1" hidden accept="image/*" />
                                <i class="bi bi-cloud-upload fs-2 text-primary mb-2"></i>
                                <h5 class="text-white mb-2">Upload Image</h5>
                                <p class="text-light small mb-0">Image size must be less than <span class="text-warning fw-bold">2MB</span></p>
                            </div>
                            <button class="btn_image1 btn btn-primary w-100" type="button">
                                <i class="bi bi-image me-2"></i>Select Image
                            </button>
                        </div>
                    </div>
                    
                    <div class="mt-3 mb-3">
                        <label for="DescColor" class="form-label">Couleur de texte :</label>
                        <div class="d-flex align-items-center gap-3">
                            <input type="color" id="DescColor" name="DescColor" value="#ffffff" 
                                class="form-control form-control-color" style="width: 50px; height: 50px;">
                            <span class="text-white-50" id="colorHexValue">#ffffff</span>
                        </div>
                    </div>
                </div>

                <!-- About First Section Form -->
                <div id="formulaire3" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">                 
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation de la 1ère Section</h1>
                    
                    <!-- Elements to Delete Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="text-white mb-3">Éléments à supprimer :</h5>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="about-div" id="deleteAboutTitle">
                            <label class="form-check-label" for="deleteAboutTitle">
                                Supprimer cette section
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="about-description" id="deleteAboutDesc">
                            <label class="form-check-label" for="deleteAboutDesc">
                                Supprimer la description
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="about-icons" id="deleteAboutIcons">
                            <label class="form-check-label" for="deleteAboutIcons">
                                Supprimer le bouton
                            </label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="TitleAbout" class="form-label">Titre :</label>
                        <input type="text" id="TitleAbout" name="TitleAbout" class="form-control"
                            placeholder="Nous sommes libres ..">
                    </div>

                    <div class="mt-3 mb-3">
                        <label for="AboutColor1" class="form-label">Couleur de texte du titre :</label>
                        <div class="d-flex align-items-center gap-3">
                            <input type="color" id="AboutColor1" name="AboutColor1" value="#6366f1" 
                                class="form-control form-control-color" style="width: 50px; height: 50px;">
                            <span class="text-white-50" id="aboutColorValue">#000000</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="DescriptionAbout" class="form-label">Description :</label>
                        <textarea id="DescriptionAbout" name="DescriptionAbout" class="form-control" rows="3"
                            placeholder="Description ici..."></textarea>
                    </div>
                    
                    <div class="mt-3 mb-3">
                        <label for="AboutColor" class="form-label">Couleur de texte de description :</label>
                        <div class="d-flex align-items-center gap-3">
                            <input type="color" id="AboutColor" name="AboutColor" value="#6366f1" 
                                class="form-control form-control-color" style="width: 50px; height: 50px;">
                            <span class="text-white-50" id="aboutDescColorValue">#000000</span>
                        </div>
                    </div>
                </div>

                <!-- About Second Section Form -->
                <div id="formulaire4" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">                    
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation de la 2ème Section</h1>
                    
                    <!-- Elements to Delete Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="text-white mb-3">Éléments à supprimer :</h5>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="about" id="deleteAbout">
                            <label class="form-check-label" for="deleteAbout">
                                Supprimer cette section de about
                            </label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="about-div" id="deleteAboutTitle">
                            <label class="form-check-label" for="deleteAboutTitle">
                                Supprimer la partie de titre et description
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="about-carde" id="deleteAboutCared">
                            <label class="form-check-label" for="deleteAboutCared">
                                Supprimer les cartes
                            </label>
                        </div>
                    </div>
                </div>
                            
                <!-- Box 1 Form -->
                <div id="formulaireBox1" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h2 class="text-center mb-4 fs-4 text-white">Box 1 Configuration</h2>
                    
                    <div class="card bg-dark bg-opacity-50 p-3 border-0">
                        <!-- Icon Selector -->
                        <div class="mb-3">
                            <label class="form-label text-white">Sélectionner une icône</label>
                            <div class="input-group mb-3">
                                <input type="text" id="iconSearch" class="form-control" placeholder="Rechercher une icône...">
                                <input type="hidden" id="IconBox1" name="IconBox1">
                            </div>
                            
                            <div class="icon-grid">
                                <!-- Bootstrap Icons -->
                                <div class="icon-item bi bi-heart" data-icon="bi-heart"></div>
                                <div class="icon-item bi bi-star" data-icon="bi-star"></div>
                                <div class="icon-item bi bi-gear" data-icon="bi-gear"></div>
                                <div class="icon-item bi bi-person" data-icon="bi-person"></div>
                                <div class="icon-item bi bi-house" data-icon="bi-house"></div>
                                <div class="icon-item bi bi-envelope" data-icon="bi-envelope"></div>
                                <div class="icon-item bi bi-chat" data-icon="bi-chat"></div>
                                <div class="icon-item bi bi-camera" data-icon="bi-camera"></div>
                                <div class="icon-item bi bi-bell" data-icon="bi-bell"></div>
                                <div class="icon-item bi bi-bookmark" data-icon="bi-bookmark"></div>
                                <div class="icon-item bi bi-cart" data-icon="bi-cart"></div>
                                <div class="icon-item bi bi-phone" data-icon="bi-phone"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="TitreBox1" class="form-label text-white">Titre Box 1</label>
                            <input type="text" id="TitreBox1" name="TitreBox1" class="form-control mb-2" 
                                placeholder="Titre Box 1">
                        </div>

                        <div class="mb-3">
                            <label for="DescBox1" class="form-label text-white">Description Box 1</label>
                            <textarea id="DescBox1" name="DescBox1" class="form-control" rows="2" 
                                placeholder="Description Box 1"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Box 2 Form -->
                <div id="formulaireBox2" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h2 class="text-center mb-4 fs-4 text-white">Box 2 Configuration</h2>
                    
                    <div class="card bg-dark bg-opacity-50 p-3 border-0">
                        <!-- Icon Selector -->
                        <div class="mb-3">
                            <label class="form-label text-white">Sélectionner une icône</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Rechercher une icône...">
                                <input type="hidden" id="IconBox2" name="IconBox2">
                            </div>
                            
                            <div class="icon-grid">
                                <div class="icon-item bi bi-heart" data-icon="bi-heart"></div>
                                <div class="icon-item bi bi-star" data-icon="bi-star"></div>
                                <div class="icon-item bi bi-gear" data-icon="bi-gear"></div>
                                <div class="icon-item bi bi-person" data-icon="bi-person"></div>
                                <div class="icon-item bi bi-house" data-icon="bi-house"></div>
                                <div class="icon-item bi bi-envelope" data-icon="bi-envelope"></div>
                                <div class="icon-item bi bi-chat" data-icon="bi-chat"></div>
                                <div class="icon-item bi bi-camera" data-icon="bi-camera"></div>
                                <div class="icon-item bi bi-bell" data-icon="bi-bell"></div>
                                <div class="icon-item bi bi-bookmark" data-icon="bi-bookmark"></div>
                                <div class="icon-item bi bi-cart" data-icon="bi-cart"></div>
                                <div class="icon-item bi bi-phone" data-icon="bi-phone"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="TitreBox2" class="form-label text-white">Titre Box 2</label>
                            <input type="text" id="TitreBox2" name="TitreBox2" class="form-control mb-2" 
                                placeholder="Titre Box 2">
                        </div>

                        <div class="mb-3">
                            <label for="DescBox2" class="form-label text-white">Description Box 2</label>
                            <textarea id="DescBox2" name="DescBox2" class="form-control" rows="2" 
                                placeholder="Description Box 2"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Box 3 Form -->
                <div id="formulaireBox3" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h2 class="text-center mb-4 fs-4 text-white">Box 3 Configuration</h2>
                    
                    <div class="card bg-dark bg-opacity-50 p-3 border-0">
                        <!-- Icon Selector -->
                        <div class="mb-3">
                            <label class="form-label text-white">Sélectionner une icône</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Rechercher une icône...">
                                <input type="hidden" id="IconBox3" name="IconBox3">
                            </div>
                            
                            <div class="icon-grid">
                                <div class="icon-item bi bi-heart" data-icon="bi-heart"></div>
                                <div class="icon-item bi bi-star" data-icon="bi-star"></div>
                                <div class="icon-item bi bi-gear" data-icon="bi-gear"></div>
                                <div class="icon-item bi bi-person" data-icon="bi-person"></div>
                                <div class="icon-item bi bi-house" data-icon="bi-house"></div>
                                <div class="icon-item bi bi-envelope" data-icon="bi-envelope"></div>
                                <div class="icon-item bi bi-chat" data-icon="bi-chat"></div>
                                <div class="icon-item bi bi-camera" data-icon="bi-camera"></div>
                                <div class="icon-item bi bi-bell" data-icon="bi-bell"></div>
                                <div class="icon-item bi bi-bookmark" data-icon="bi-bookmark"></div>
                                <div class="icon-item bi bi-cart" data-icon="bi-cart"></div>
                                <div class="icon-item bi bi-phone" data-icon="bi-phone"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="TitreBox3" class="form-label text-white">Titre Box 3</label>
                            <input type="text" id="TitreBox3" name="TitreBox3" class="form-control mb-2" 
                                placeholder="Titre Box 3">
                        </div>

                        <div class="mb-3">
                            <label for="DescBox3" class="form-label text-white">Description Box 3</label>
                            <textarea id="DescBox3" name="DescBox3" class="form-control" rows="2" 
                                placeholder="Description Box 3"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Box 4 Form -->
                <div id="formulaireBox4" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h2 class="text-center mb-4 fs-4 text-white">Box 4 Configuration</h2>
                    
                    <div class="card bg-dark bg-opacity-50 p-3 border-0">
                        <!-- Icon Selector -->
                        <div class="mb-3">
                            <label class="form-label text-white">Sélectionner une icône</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Rechercher une icône...">
                                <input type="hidden" id="IconBox4" name="IconBox4">
                            </div>
                            
                            <div class="icon-grid">
                                <div class="icon-item bi bi-heart" data-icon="bi-heart"></div>
                                <div class="icon-item bi bi-star" data-icon="bi-star"></div>
                                <div class="icon-item bi bi-gear" data-icon="bi-gear"></div>
                                <div class="icon-item bi bi-person" data-icon="bi-person"></div>
                                <div class="icon-item bi bi-house" data-icon="bi-house"></div>
                                <div class="icon-item bi bi-envelope" data-icon="bi-envelope"></div>
                                <div class="icon-item bi bi-chat" data-icon="bi-chat"></div>
                                <div class="icon-item bi bi-camera" data-icon="bi-camera"></div>
                                <div class="icon-item bi bi-bell" data-icon="bi-bell"></div>
                                <div class="icon-item bi bi-bookmark" data-icon="bi-bookmark"></div>
                                <div class="icon-item bi bi-cart" data-icon="bi-cart"></div>
                                <div class="icon-item bi bi-phone" data-icon="bi-phone"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="TitreBox4" class="form-label text-white">Titre Box 4</label>
                            <input type="text" id="TitreBox4" name="TitreBox4" class="form-control mb-2" 
                                placeholder="Titre Box 4">
                        </div>

                        <div class="mb-3">
                            <label for="DescBox4" class="form-label text-white">Description Box 4</label>
                            <textarea id="DescBox4" name="DescBox4" class="form-control" rows="2" 
                                placeholder="Description Box 4"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Stats Section Form -->
                <div id="formulaire_stats" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation des Statistiques</h1>
                    
                    <!-- Elements to Delete Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="text-white mb-3">Éléments à supprimer :</h5>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="stats" id="formulaire_stats">
                            <label class="form-check-label" for="formulaire_stats">
                                Supprimer cette section de statistiques
                            </label>
                        </div>
                    </div>
                    
                    <!-- <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card bg-dark bg-opacity-50 p-3 border-0">
                                <label class="form-label text-white">Clients</label>
                                <input type="number" class="form-control" name="statsClients" value="232" min="0">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card bg-dark bg-opacity-50 p-3 border-0">
                                <label class="form-label text-white">Projects</label>
                                <input type="number" class="form-control" name="statsProjects" value="521" min="0">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card bg-dark bg-opacity-50 p-3 border-0">
                                <label class="form-label text-white">Hours Of Support</label>
                                <input type="number" class="form-control" name="statsHours" value="1453" min="0">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card bg-dark bg-opacity-50 p-3 border-0">
                                <label class="form-label text-white">Workers</label>
                                <input type="number" class="form-control" name="statsWorkers" value="32" min="0">
                            </div>
                        </div>
                    </div> -->
                </div>

                <!-- Services Section Form -->
                <div id="formulaire5" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation de la Section Services</h1>
                    
                    <!-- Elements to Delete Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="text-white mb-3">Éléments à supprimer :</h5>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="services" id="deleteServices">
                            <label class="form-check-label" for="deleteServices">
                                Supprimer cette section de services
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="TitleServices" class="form-label">Titre de la section :</label>
                        <input type="text" id="TitleServices" name="TitleServices" class="form-control"
                            placeholder="Titre de la section">
                    </div>
                    
                    <div class="mb-3">
                        <label for="DescServices" class="form-label">Description :</label>
                        <textarea id="DescServices" name="DescServices" class="form-control" rows="3"
                            placeholder="Description ici..."></textarea>
                    </div>
                </div>

                <!-- Service Box 1 Form -->
                <div id="formulaire5_1" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation du Service 1</h1>

                    <div class="mb-3">
                        <label for="TitreBox5_1" class="form-label">Titre Box 1 :</label>
                        <input type="text" id="TitreBox5_1" name="TitreBox5_1" class="form-control"
                            placeholder="Titre Box 5_1">
                    </div>
                    
                    <div class="mb-3">
                        <label for="DescBox5_1" class="form-label">Description Box 1 :</label>
                        <textarea id="DescBox5_1" name="DescBox5_1" class="form-control" rows="3"
                            placeholder="Description Box 5_1"></textarea>
                    </div>
                    
                    
                </div>

                <!-- Additional Service Box Forms (formulaire5_2 through formulaire5_6) follow the same pattern -->
                <div id="formulaire5_2" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation du Service 2</h1>

                    <div class="mb-3">
                        <label for="TitreBox5_2" class="form-label">Titre Box 2 :</label>
                        <input type="text" id="TitreBox5_2" name="TitreBox5_2" class="form-control"
                            placeholder="Titre Box 5_2">
                    </div>
                    
                    <div class="mb-3">
                        <label for="DescBox5_2" class="form-label">Description Box 2 :</label>
                        <textarea id="DescBox5_2" name="DescBox5_2" class="form-control" rows="3"
                            placeholder="Description Box 5_2"></textarea>
                    </div>
                                        
                </div>
                <div id="formulaire5_3" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation du Service 2</h1>

                    <div class="mb-3">
                        <label for="TitreBox5_2" class="form-label">Titre Box 3 :</label>
                        <input type="text" id="TitreBox5_3" name="TitreBox5_3" class="form-control"
                            placeholder="Titre Box 5_3">
                    </div>
                    
                    <div class="mb-3">
                        <label for="DescBox5_3" class="form-label">Description Box 3 :</label>
                        <textarea id="DescBox5_3" name="DescBox5_3" class="form-control" rows="3"
                            placeholder="Description Box 5_3"></textarea>
                    </div>
                                        
                </div>
                <div id="formulaire5_4" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation du Service 2</h1>

                    <div class="mb-3">
                        <label for="TitreBox5_4" class="form-label">Titre Box 4 :</label>
                        <input type="text" id="TitreBox5_4" name="TitreBox5_4" class="form-control"
                            placeholder="Titre Box 5_4">
                    </div>
                    
                    <div class="mb-3">
                        <label for="DescBox5_4" class="form-label">Description Box 3 :</label>
                        <textarea id="DescBox5_4" name="DescBox5_4" class="form-control" rows="3"
                            placeholder="Description Box 5_4"></textarea>
                    </div>
                                        
                </div>
                <div id="formulaire5_5" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation du Service 2</h1>

                    <div class="mb-3">
                        <label for="TitreBox5_5" class="form-label">Titre Box 5 :</label>
                        <input type="text" id="TitreBox5_5" name="TitreBox5_5" class="form-control"
                            placeholder="Titre Box 5_5">
                    </div>
                    
                    <div class="mb-3">
                        <label for="DescBox5_5" class="form-label">Description Box 3 :</label>
                        <textarea id="DescBox5_5" name="DescBox5_5" class="form-control" rows="3"
                            placeholder="Description Box 5_5"></textarea>
                    </div>
                                        
                </div>
                <div id="formulaire5_6" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation du Service 2</h1>

                    <div class="mb-3">
                        <label for="TitreBox5_6" class="form-label">Titre Box 6 :</label>
                        <input type="text" id="TitreBox5_6" name="TitreBox5_6" class="form-control"
                            placeholder="Titre Box 5_6">
                    </div>
                    
                    <div class="mb-3">
                        <label for="DescBox5_6" class="form-label">Description Box 3 :</label>
                        <textarea id="DescBox5_6" name="DescBox5_6" class="form-control" rows="3"
                            placeholder="Description Box 5_6"></textarea>
                    </div>
                                        
                </div>

                <!-- Footer Form -->
                <div id="formulaire6" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h1 class="text-center mb-4 fs-4 text-white">Personnalisation du Footer</h1>
                    
                    <!-- Elements to Delete Section -->
                    <div class="mb-4 p-3 border-rounded bg-dark bg-opacity-50">
                        <h5 class="text-white mb-3">Éléments à supprimer :</h5>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="footer" id="deleteFooter">
                            <label class="form-check-label" for="deleteFooter">
                                Supprimer cette section de footer
                            </label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="footer-about" id="deleteFooterAbout">
                            <label class="form-check-label" for="deleteFooterAbout">
                                Supprimer section de footer à propos
                            </label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="footer-links" id="deleteFooterLinks">
                            <label class="form-check-label" for="deleteFooterLinks">
                                Supprimer section de footer liens
                            </label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input delete-checkbox" type="checkbox" 
                                value="footer-contact" id="deleteFooterContact">
                            <label class="form-check-label" for="deleteFooterContact">
                                Supprimer section de footer contact
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="TitleAppend" class="form-label">Titre de la section :</label>
                        <input type="text" id="TitleAppend" name="TitleAppend" class="form-control" 
                            placeholder="Titre de la section">
                    </div>
                    
                    <div class="mb-3">
                        <label for="DescAppend" class="form-label">Description :</label>
                        <textarea id="DescAppend" name="DescAppend" class="form-control" rows="3" 
                            placeholder="Description ici..."></textarea>
                    </div>
                </div>

                <!-- Social Links Form -->
                <div id="LienTwitter" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h1 class="text-center mb-4 fs-4 text-white">Réseaux Sociaux</h1>
                    
                    <div class="mb-3">
                        <label for="LienTwitter" class="form-label">Lien Twitter :</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white border-0"><i class="bi bi-twitter-x"></i></span>
                            <input type="text" name="LienTwitter" class="form-control" placeholder="https://twitter.com/">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="LienFacebook" class="form-label">Lien Facebook :</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white border-0"><i class="bi bi-facebook"></i></span>
                            <input type="text" name="LienFacebook" class="form-control" placeholder="https://facebook.com/">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="LienInstagram" class="form-label">Lien Instagram :</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white border-0"><i class="bi bi-instagram"></i></span>
                            <input type="text" name="LienInstagram" class="form-control" placeholder="https://instagram.com/">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="LienLinkedin" class="form-label">Lien Linkedin :</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white border-0"><i class="bi bi-linkedin"></i></span>
                            <input type="text" name="LienLinkedin" class="form-control" placeholder="https://linkedin.com/">
                        </div>
                    </div>
                </div>
                                  
                <!-- Contact Info Form -->
                <div id="formulaire7" class="form-group" style="max-height: 300px; overflow-y: auto; display: none;">
                    <h2 class="text-center mb-4 fs-4 text-white">Informations de Contact</h2>
                    
                    <div class="mb-3">
                        <label for="ContactAdresse" class="form-label">Adresse (ligne 1) :</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white border-0"><i class="bi bi-geo-alt"></i></span>
                            <input type="text" id="ContactAdresse" name="ContactAdresse" class="form-control" 
                                placeholder="Ex: A108 Adam Street">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="ContactVille" class="form-label">Adresse (ligne 2) :</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white border-0"><i class="bi bi-building"></i></span>
                            <input type="text" id="ContactVille" name="ContactVille" class="form-control" 
                                placeholder="Ex: New York, NY 535022">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="ContactPays" class="form-label">Pays :</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white border-0"><i class="bi bi-globe"></i></span>
                            <input type="text" id="ContactPays" name="ContactPays" class="form-control" 
                                placeholder="Ex: United States">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="ContactTelephone" class="form-label">Téléphone :</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white border-0"><i class="bi bi-telephone"></i></span>
                            <input type="tel" id="ContactTelephone" name="ContactTelephone" class="form-control" 
                                placeholder="Ex: +1 5589 55488 55">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="ContactEmail" class="form-label">Email :</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white border-0"><i class="bi bi-envelope"></i></span>
                            <input type="email" id="ContactEmail" name="ContactEmail" class="form-control" 
                                placeholder="Ex: info@example.com">
                        </div>
                    </div>
                </div>            

                <div class="text-center mt-4 p-3 border-top border-secondary">
                    <!-- <button type="submit" class="btn btn-success me-3 px-4 py-2">
                        <i class="bi bi-gear-fill me-2"></i> Générer
                    </button> -->
                    <button type="submit" class="btn btn-primary px-4 py-2">
                        <i class="bi bi-download me-2"></i> Télécharger la Page
                    </button>
                    <!-- <button id="getButton" class="btn btn-primary px-4 py-2" onclick="downloadPage(event)">
                        <i class="bi bi-download me-2"></i> Télécharger la Page
                    </button> -->
                </div>
            </form>
        </div>

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{asset('template1/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" id="hero-title" data-aos-delay="100" style="color:white">Welcome to Our Website</h2>
                        <p data-aos="fade-up" id="hero-description" data-aos-delay="200">We are team of talented designers making websites
                            with Bootstrap</p>
                    </div>
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/newsletter.php" method="post" id="formular_hero" class="php-email-form">
                            <div class="sign-up-form"><input type="email" name="email"><input type="submit"
                                    value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                        <div class="edit-icon" onclick="toggleForm('formulaire2')">
                            <i class="bi bi-pencil-square fs-3 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">
                    <div class="edit-icon" onclick="toggleForm('formulaire4')">
                        <i class="bi bi-pencil-square fs-3 text-primary"></i>
                    </div>

                    <div class="col-xl-5 content" id="about-div">
                        <h3>About Us</h3>
                        <h2>Ducimus rerum libero reprehenderit cumque</h2>
                        <p id="about-description">Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime. Enim
                            reiciendis minus et rerum hic non. Dicta quas cum quia maiores iure. Quidem nulla qui
                            assumenda incidunt voluptatem tempora deleniti soluta.</p>
                        <a href="#" class="read-more" id="about-icons"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                        <div class="edit-icon" onclick="toggleForm('formulaire3')">
                            <i class="bi bi-pencil-square fs-3 text-primary"></i>
                        </div>
                    </div>

                    <div class="col-xl-7" id="about-cadre">
                        <div class="row gy-4 icon-boxes">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200" onclick="toggleForm('formulaireBox1')">
                                <div class="icon-box">
                                    <i class="bi bi-buildings"></i>
                                    <h3>Eius provident</h3>
                                    <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor
                                        voluptatem</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300" onclick="toggleForm('formulaireBox2')">
                                <div class="icon-box">
                                    <i class="bi bi-clipboard-pulse"></i>
                                    <h3>Rerum aperiam</h3>
                                    <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates
                                        quia</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400" onclick="toggleForm('formulaireBox3')">
                                <div class="icon-box">
                                    <i class="bi bi-command"></i>
                                    <h3>Veniam omnis</h3>
                                    <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur
                                        corrupti</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500" onclick="toggleForm('formulaireBox4')">
                                <div class="icon-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h3>Delares sapiente</h3>
                                    <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis
                                        quideme lorenda</p>
                                </div>
                            </div> <!-- End Icon Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section id="stats" class="stats section dark-background">
            <img src="{{ asset('template1/assets/img/stats-bg.jpg') }}" alt="" data-aos="fade-in">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="edit-icon" onclick="toggleForm('formulaire_stats')">
                    <i class="bi bi-pencil-square fs-3 text-primary"></i>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div><!-- End Stats Item -->
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <div class="edit-icon" onclick="toggleForm('formulaire5')">
                    <i class="bi bi-pencil-square fs-3 text-primary"></i>
                </div>

                <h2>Services</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex" onclick="toggleForm('formulaire5_1')">
                            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                            <div>              
                                <h4 class="title"><a class="stretched-link">Lorem Ipsum</a></h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex" onclick="toggleForm('formulaire5_2')">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Dolor Sitema</a></h4>
                                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex" onclick="toggleForm('formulaire5_3')">
                            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Sed ut perspiciatis</a></h4>
                                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex" onclick="toggleForm('formulaire5_4')">
                            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Magni Dolores</a></h4>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex" onclick="toggleForm('formulaire5_5')">
                            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Nemo Enim</a></h4>
                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex" onclick="toggleForm('formulaire5_6')">
                            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Eiusmod Tempor</a></h4>
                                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="footer position-relative light-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about" is="footer-about">
                    <a class="logo d-flex align-items-center">
                        <span class="sitename">Append</span>
                        <div class="edit-icon" onclick="toggleForm('formulaire6')">
                            <i class="bi bi-pencil-square fs-3 text-primary"></i>
                        </div>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="edit-icon" onclick="toggleForm('LienTwitter')"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="edit-icon" onclick="toggleForm('LienTwitter')"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="edit-icon" onclick="toggleForm('LienTwitter')"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="edit-icon" onclick="toggleForm('LienTwitter')"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-12 footer-links" id="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start" id="footer-contact">
                    <h4 class="edit-icon" onclick="toggleForm('formulaire7')">Contact Us</h4>
                    
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p>United States</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>
                
                <div class="container copyright text-center mt-4">
                    <p>&copy; <span>Copyright</span> <strong class="sitename">Append</strong> <span>All Rights Reserved</span></p>
                    <div class="credits">
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template1/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <!-- Main JS File -->
    <script src="{{ asset('template1/assets/js/main.js') }}"></script>

    <script>
        // Form toggle function
        function toggleForm(formId) {
            const formIds = [
                'formulaire1', 'formulaire2', 'formulaire3', 'formulaire4', 
                'formulaireBox1', 'formulaireBox2', 'formulaireBox3', 'formulaireBox4',
                'formulaire_stats', 'formulaire5', 'formulaire5_1', 'formulaire5_2',
                'formulaire5_3', 'formulaire5_4', 'formulaire5_5', 'formulaire5_6',
                'formulaire6', 'LienTwitter', 'formulaire7'
            ];
            
            const modal = document.getElementById('formulaire');
            
            // Toggle modal visibility
            if (modal.style.display === "none") {
                modal.style.display = "block";
                
                // Add a nice entrance animation
                modal.animate([
                    { opacity: 0, transform: 'translate(-50%, -45%) scale(0.95)' },
                    { opacity: 1, transform: 'translate(-50%, -50%) scale(1)' }
                ], { duration: 250, easing: 'ease-out' });
            } else {
                // Only hide the modal if we're closing the currently open form
                const currentForm = formIds.find(id => document.getElementById(id).style.display === "block");
                if (currentForm === formId) {
                    const fadeOut = modal.animate([
                        { opacity: 1, transform: 'translate(-50%, -50%) scale(1)' },
                        { opacity: 0, transform: 'translate(-50%, -45%) scale(0.95)' }
                    ], { duration: 200, easing: 'ease-in' });
                    
                    fadeOut.onfinish = () => { modal.style.display = "none"; };
                    return;
                }
            }
            
            // Hide all forms
            formIds.forEach(id => {
                const form = document.getElementById(id);
                if (form) form.style.display = "none";
            });
            
            // Show the requested form with a fade-in animation
            const form = document.getElementById(formId);
            if (form) {
                form.style.display = "block";
                form.animate([
                    { opacity: 0, transform: 'translateY(10px)' },
                    { opacity: 1, transform: 'translateY(0)' }
                ], { duration: 300, easing: 'ease-out' });
            }
        }

        // Close form function
        function closeForm() {
            const modal = document.getElementById('formulaire');
            
            const fadeOut = modal.animate([
                { opacity: 1, transform: 'translate(-50%, -50%) scale(1)' },
                { opacity: 0, transform: 'translate(-50%, -45%) scale(0.95)' }
            ], { duration: 200, easing: 'ease-in' });
            
            fadeOut.onfinish = () => { modal.style.display = "none"; };
        }

        // Download page function
        function downloadPage(event) {
            event.preventDefault();
            const form = document.getElementById('site-generator-form');
            form.action = '/download-modified-page';
            
            // Add a loading indicator
            const button = event.target;
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="bi bi-hourglass-split me-2"></i> Préparation...';
            button.disabled = true;
            
            setTimeout(() => {
                form.submit();
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.disabled = false;
                }, 2000);
            }, 500);
        }

        // File upload handling
        function handleImageUpload(buttonClass, inputId, imgAreaClass) {
            const fileTypes = [
                "image/apng", "image/bmp", "image/gif", "image/jpeg", "image/pjpeg",
                "image/png", "image/svg+xml", "image/tiff", "image/webp", "image/x-icon", "image/avif",
            ];

            function validFileType(file) {
                return fileTypes.includes(file.type);
            }

            let button = document.querySelector(buttonClass);
            let inputHidden = document.querySelector(inputId);
            let imgArea = document.querySelector(imgAreaClass);

            if (button && inputHidden && imgArea) {
                // Button click opens the file input
                button.addEventListener("click", function () {
                    inputHidden.click();
                });

                // Handle file selection
                inputHidden.addEventListener("change", function (e) {
                    let image = e.target.files[0];
                    if (!validFileType(image)) {
                        alert("Type de fichier invalide. Veuillez sélectionner une image.");
                        return;
                    }
                    if (image.size > 2097152) {
                        alert("L'image doit être inférieure à 2 Mo.");
                        return;
                    }

                    const reader = new FileReader();
                    reader.addEventListener("load", function () {
                        // Remove any existing images
                        imgArea.querySelectorAll("img").forEach();

                        // Add the new image
                        const img = document.createElement("img");
                        img.src = reader.result;
                        img.style.maxWidth = "100%";
                        img.style.borderRadius = "6px";
                        img.style.marginTop = "10px";
                        imgArea.appendChild(img);
                        imgArea.classList.add("active");
                        imgArea.dataset.title = image.name;
                        
                        // Add a nice loading effect
                        img.style.opacity = "0";
                        setTimeout(() => {
                            img.style.transition = "opacity 0.5s ease";
                            img.style.opacity = "1";
                        }, 50);
                    });
                    reader.readAsDataURL(image);
                });
                
                // Add drag and drop support
                imgArea.addEventListener("dragover", (e) => {
                    e.preventDefault();
                    imgArea.style.borderColor = "#0d6efd";
                    imgArea.style.backgroundColor = "rgba(13, 110, 253, 0.1)";
                });
                
                imgArea.addEventListener("dragleave", () => {
                    imgArea.style.borderColor = "rgba(255, 255, 255, 0.3)";
                    imgArea.style.backgroundColor = "";
                });
                
                imgArea.addEventListener("drop", (e) => {
                    e.preventDefault();
                    imgArea.style.borderColor = "rgba(255, 255, 255, 0.3)";
                    imgArea.style.backgroundColor = "";
                    
                    if (e.dataTransfer.files.length) {
                        inputHidden.files = e.dataTransfer.files;
                        const event = new Event('change', { bubbles: true });
                        inputHidden.dispatchEvent(event);
                    }
                });
            }
        }

        // Initialize image uploaders
        handleImageUpload(".btn_logo", "#screenshoot_logo", ".imgArea_logo");
        handleImageUpload(".btn_image1", "#image1", ".imgArea_image1");

        // Update color value displays
        document.getElementById('navColor').addEventListener('input', function() {
            const navColorValue = document.getElementById('navColorValue');
            if (navColorValue) {
                navColorValue.textContent = this.value.toUpperCase();
            }
        });

        document.getElementById('DescColor').addEventListener('input', function() {
            document.getElementById('colorHexValue').textContent = this.value.toUpperCase();
        });

        document.getElementById('AboutColor1').addEventListener('input', function() {
            document.getElementById('aboutColorValue').textContent = this.value.toUpperCase();
        });

        document.getElementById('AboutColor').addEventListener('input', function() {
            document.getElementById('aboutDescColorValue').textContent = this.value.toUpperCase();
        });

        // Navigation menu updater
        document.addEventListener('DOMContentLoaded', function() {
            // Navbar customization
            const navmenuUl = document.querySelector('#navmenu ul');
            const dataNavInput = document.getElementById('dataNav');
            const navColorInput = document.getElementById('navColor');
            const headerElement = document.getElementById('header');
            const btnGetStarted = document.querySelector('.btn-getstarted');
            const btnNavInput = document.getElementById('btnNav');
            const sitenameElement = document.querySelector('.sitename');
            const screenshootLogoInput = document.getElementById('screenshoot_logo');
            const logoLink = document.querySelector('.logo');
            
            // Additional inputs
            const fontFamilyInput = document.getElementById('fontFamily');
            const fontSizeInput = document.getElementById('fontSize');
            const fontColorInput = document.getElementById('fontColor');
            const logoSizeInput = document.getElementById('logoSize');
            const navOpacityInput = document.getElementById('navOpacity');
            const navShadowInput = document.getElementById('navShadow');

            // Convert HEX to RGBA
            const hexToRgba = (hex, opacity) => {
                hex = hex.replace('#', '');
                const r = parseInt(hex.substring(0, 2), 16);
                const g = parseInt(hex.substring(2, 4), 16);
                const b = parseInt(hex.substring(4, 6), 16);
                return `rgba(${r}, ${g}, ${b}, ${opacity})`;
            };

            // Update navbar items
            const updateNavbar = () => {
                if (!dataNavInput || !navmenuUl) return;
                
                const items = dataNavInput.value.split(',').map(item => item.trim()).filter(Boolean);
                navmenuUl.innerHTML = items.map(item => `
                    <li>
                        <a href="#${item.toLowerCase()}" style="color: ${fontColorInput?.value || '#fff'}">
                            ${item}
                        </a>
                    </li>
                `).join('');
            };

            // Update button text
            const updateButton = () => {
                if (!btnGetStarted) return;
                
                btnGetStarted.textContent = btnNavInput?.value || 'Get Started';
            };

            // Update navbar styles
            const updateNavbarStyles = () => {
                if (!headerElement || !navColorInput || !navOpacityInput) return;
                
                const opacity = parseInt(navOpacityInput.value) / 100;
                headerElement.style.backgroundColor = hexToRgba(navColorInput.value, opacity);
                headerElement.style.boxShadow = navShadowInput?.checked ? 
                    '0 4px 10px rgba(0, 0, 0, 0.1)' : 'none';
            };

            // Update typography
            const updateTypography = () => {
                const links = document.querySelectorAll('.navmenu a');
                links.forEach(link => {
                    if (fontFamilyInput) link.style.fontFamily = fontFamilyInput.value;
                    if (fontSizeInput) link.style.fontSize = `${fontSizeInput.value}px`;
                    if (fontColorInput) link.style.color = fontColorInput.value;
                });
            };

            // Update logo
            const updateLogo = () => {
                const logoImg = logoLink?.querySelector('img');
                if (logoImg && logoSizeInput) {
                    logoImg.style.width = `${logoSizeInput.value}px`;
                    logoImg.style.height = `auto`;
                }
            };

            // Handle logo upload
            const handleLogoUpload = (event) => {
                const file = event.target.files[0];
                if (!file || !logoLink || !sitenameElement) return;

                const reader = new FileReader();
                reader.onload = (e) => {
                    sitenameElement.style.display = 'none';
                    let logoImg = logoLink.querySelector('img');
                    
                    if (!logoImg) {
                        logoImg = document.createElement('img');
                        logoLink.prepend(logoImg);
                    }
                    
                    logoImg.src = e.target.result;
                    logoImg.alt = 'Logo personnalisé';
                    logoImg.style.maxHeight = '40px';
                    updateLogo();
                };
                reader.readAsDataURL(file);
            };

            // Set up event listeners
            const setupEventListeners = () => {
                // Standard inputs
                [dataNavInput, navColorInput, btnNavInput, fontFamilyInput, 
                fontSizeInput, fontColorInput, logoSizeInput, navOpacityInput].forEach(input => {
                    input?.addEventListener('input', () => {
                        updateNavbar();
                        updateButton();
                        updateNavbarStyles();
                        updateLogo();
                        updateTypography();
                    });
                });

                // Checkboxes
                navShadowInput?.addEventListener('change', updateNavbarStyles);

                // Logo upload
                screenshootLogoInput?.addEventListener('change', handleLogoUpload);
            };

            // Initialize all navbar customization features
            const init = () => {
                updateNavbar();
                updateButton();
                updateNavbarStyles();
                updateTypography();
                updateLogo();
                setupEventListeners();
            };

            init();

            // Hero section customization
            const descTitleElement = document.querySelector('#hero .container .row .col-lg-10 h2');
            const descriptionElement = document.querySelector('#hero .container .row .col-lg-10 p');
            const image1Element = document.querySelector('#hero.dark-background > img');

            const descTitleInput = document.getElementById('DescTitle');
            const descriptionInput = document.getElementById('Desceription');
            const image1Input = document.getElementById('image1');
            const descColorInput = document.getElementById('DescColor');

            function updateDescTitle() {
                if (descTitleElement && descTitleInput) {
                    descTitleElement.textContent = descTitleInput.value.trim() || "Welcome to Our Website";
                }
            }

            function updateDescription() {
                if (descriptionElement && descriptionInput) {
                    descriptionElement.textContent = descriptionInput.value.trim() || "We are team of talented designers making websites with Bootstrap";
                }
            }

            function updateImage1(event) {
                const file = event.target.files[0];
                if (file && image1Element) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        image1Element.src = e.target.result;
                        
                        // Add a nice fade-in effect
                        image1Element.style.opacity = 0;
                        setTimeout(() => {
                            image1Element.style.transition = "opacity 0.5s ease";
                            image1Element.style.opacity = 1;
                        }, 50);
                    }
                    reader.readAsDataURL(file);
                }
            }

            function updateDescColor() {
                if (descTitleElement && descColorInput) {
                    descTitleElement.style.color = descColorInput.value;
                }
                if (descriptionElement && descColorInput) {
                    descriptionElement.style.color = descColorInput.value;
                }
            }

            // Hero section event listeners
            if (descTitleInput) {
                descTitleInput.addEventListener('input', updateDescTitle);
            }

            if (descriptionInput) {
                descriptionInput.addEventListener('input', updateDescription);
            }

            if (image1Input) {
                image1Input.addEventListener('change', updateImage1);
            }

            if (descColorInput) {
                descColorInput.addEventListener('input', updateDescColor);
            }

            // About section customization
            const aboutTitleElement = document.querySelector('#about .content h2');
            const aboutDescriptionElement = document.querySelector('#about .content p');
            const aboutReadMoreLink = document.querySelector('#about .content .read-more span');

            const titleAboutInput = document.getElementById('TitleAbout');
            const descriptionAboutInput = document.getElementById('DescriptionAbout');
            const aboutColor1Input = document.getElementById('AboutColor1');
            const aboutColorInput = document.getElementById('AboutColor');

            function updateAboutTitle() {
                if (aboutTitleElement && titleAboutInput) {
                    aboutTitleElement.textContent = titleAboutInput.value.trim() || aboutTitleElement.textContent;
                }
            }

            function updateAboutDescription() {
                if (aboutDescriptionElement && descriptionAboutInput) {
                    aboutDescriptionElement.textContent = descriptionAboutInput.value.trim() || aboutDescriptionElement.textContent;
                }
            }

            function updateAboutTitleColor() {
                if (aboutTitleElement && aboutColor1Input) {
                    aboutTitleElement.style.color = aboutColor1Input.value;
                }
            }

            function updateAboutDescriptionColor() {
                if (aboutDescriptionElement && aboutColorInput) {
                    aboutDescriptionElement.style.color = aboutColorInput.value;
                }
            }

            // About section event listeners
            if (titleAboutInput) {
                titleAboutInput.addEventListener('input', updateAboutTitle);
            }

            if (descriptionAboutInput) {
                descriptionAboutInput.addEventListener('input', updateAboutDescription);
            }

            if (aboutColor1Input) {
                aboutColor1Input.addEventListener('input', updateAboutTitleColor);
            }

            if (aboutColorInput) {
                aboutColorInput.addEventListener('input', updateAboutDescriptionColor);
            }

            // Checkbox for elements to delete
            const checkboxes = document.querySelectorAll('.delete-checkbox');
            const hiddenInput = document.getElementById('elementsToDelete');

            function updateHiddenInput() {
                const selectedElements = Array.from(checkboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);
                
                hiddenInput.value = selectedElements.join(',');
            }

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateHiddenInput);
            });

            // Icon selection for about boxes
            for (let i = 1; i <= 4; i++) {
                const iconInput = document.getElementById(`IconBox${i}`);
                const titleInput = document.getElementById(`TitreBox${i}`);
                const descInput = document.getElementById(`DescBox${i}`);
                const iconDisplay = document.querySelector(`.icon-boxes .col-md-6:nth-child(${i}) i`);
                const titleDisplay = document.querySelector(`.icon-boxes .col-md-6:nth-child(${i}) h3`);
                const descDisplay = document.querySelector(`.icon-boxes .col-md-6:nth-child(${i}) p`);
                const iconItems = document.querySelectorAll(`#formulaireBox${i} .icon-item`);

                // Icon selection
                iconItems.forEach(item => {
                    item.addEventListener('click', () => {
                        const selectedIcon = item.getAttribute('data-icon');

                        // Update visual selection
                        iconItems.forEach(el => el.classList.remove('selected'));
                        item.classList.add('selected');

                        // Update hidden input
                        if (iconInput) {
                            iconInput.value = `bi ${selectedIcon}`;
                        }

                        // Update icon display
                        if (iconDisplay) {
                            iconDisplay.className = `bi ${selectedIcon}`;
                        }
                    });
                });

                // Title update
                if (titleInput && titleDisplay) {
                    titleInput.addEventListener('input', function () {
                        titleDisplay.textContent = titleInput.value.trim() || titleDisplay.textContent;
                    });
                }

                // Description update
                if (descInput && descDisplay) {
                    descInput.addEventListener('input', function () {
                        descDisplay.textContent = descInput.value.trim() || descDisplay.textContent;
                    });
                }
            }

            // Services section customization
            const serviceItems = document.querySelectorAll('#services .container .row .service-item');
            const serviceForms = {
                'formulaire5_1': {
                    titleElement: serviceItems[0]?.querySelector('.title a'),
                    descriptionElement: serviceItems[0]?.querySelector('.description'),
                    titleInput: document.getElementById('TitreBox5_1'),
                    descriptionInput: document.getElementById('DescBox5_1'),
                },
                'formulaire5_2': {
                    titleElement: serviceItems[1]?.querySelector('.title a'),
                    descriptionElement: serviceItems[1]?.querySelector('.description'),
                    titleInput: document.getElementById('TitreBox5_2'),
                    descriptionInput: document.getElementById('DescBox5_2'),
                },
                'formulaire5_3': {
                    titleElement: serviceItems[2]?.querySelector('.title a'),
                    descriptionElement: serviceItems[2]?.querySelector('.description'),
                    titleInput: document.getElementById('TitreBox5_3'),
                    descriptionInput: document.getElementById('DescBox5_3'),
                },
                'formulaire5_4': {
                    titleElement: serviceItems[3]?.querySelector('.title a'),
                    descriptionElement: serviceItems[3]?.querySelector('.description'),
                    titleInput: document.getElementById('TitreBox5_4'),
                    descriptionInput: document.getElementById('DescBox5_4'),
                },
                'formulaire5_5': {
                    titleElement: serviceItems[4]?.querySelector('.title a'),
                    descriptionElement: serviceItems[4]?.querySelector('.description'),
                    titleInput: document.getElementById('TitreBox5_5'),
                    descriptionInput: document.getElementById('DescBox5_5'),
                },
                'formulaire5_6': {
                    titleElement: serviceItems[5]?.querySelector('.title a'),
                    descriptionElement: serviceItems[5]?.querySelector('.description'),
                    titleInput: document.getElementById('TitreBox5_6'),
                    descriptionInput: document.getElementById('DescBox5_6'),
                },
            };

            // Update service item content
            function updateServiceItem(formId) {
                const formElements = serviceForms[formId];
                if (formElements) {
                    if (formElements.titleElement && formElements.titleInput) {
                        formElements.titleElement.textContent = formElements.titleInput.value.trim() || formElements.titleElement.textContent;
                    }
                    if (formElements.descriptionElement && formElements.descriptionInput) {
                        formElements.descriptionElement.textContent = formElements.descriptionInput.value.trim() || formElements.descriptionElement.textContent;
                    }
                }
            }

            // Services event listeners
            for (const formId in serviceForms) {
                const formElements = serviceForms[formId];
                if (formElements.titleInput) {
                    formElements.titleInput.addEventListener('input', () => updateServiceItem(formId));
                }
                if (formElements.descriptionInput) {
                    formElements.descriptionInput.addEventListener('input', () => updateServiceItem(formId));
                }
            }

            // Footer customization
            const footerTitleSelector = '#footer .footer-top .footer-about .logo .sitename';
            const footerDescriptionSelector = '#footer .footer-top .footer-about p';
            const titleAppendInputId = 'TitleAppend';
            const descAppendInputId = 'DescAppend';

            const footerTitleElement = document.querySelector(footerTitleSelector);
            const footerDescriptionElement = document.querySelector(footerDescriptionSelector);
            const titleAppendInput = document.getElementById(titleAppendInputId);
            const descAppendInput = document.getElementById(descAppendInputId);

            function updateFooterInfo() {
                if (footerTitleElement && titleAppendInput) {
                    footerTitleElement.textContent = titleAppendInput.value.trim() || footerTitleElement.textContent;
                }
                if (footerDescriptionElement && descAppendInput) {
                    footerDescriptionElement.textContent = descAppendInput.value.trim() || footerDescriptionElement.textContent;
                }
            }

            if (titleAppendInput) {
                titleAppendInput.addEventListener('input', updateFooterInfo);
            }
            if (descAppendInput) {
                descAppendInput.addEventListener('input', updateFooterInfo);
            }

            // Social links customization
            const socialLinks = {
                'LienTwitter': '#footer .footer-top .footer-about .social-links a:nth-child(1)',
                'LienFacebook': '#footer .footer-top .footer-about .social-links a:nth-child(2)',
                'LienInstagram': '#footer .footer-top .footer-about .social-links a:nth-child(3)',
                'LienLinkedin': '#footer .footer-top .footer-about .social-links a:nth-child(4)'
            };

            for (const inputName in socialLinks) {
                const input = document.querySelector(`input[name="${inputName}"]`);
                const link = document.querySelector(socialLinks[inputName]);
                
                if (input && link) {
                    input.addEventListener('input', function() {
                        link.href = input.value.trim() || '#';
                    });
                }
            }

            // Contact info customization
            const contactSelectors = {
                'ContactAdresse': '#footer .footer-top .footer-contact p:nth-child(1)',
                'ContactVille': '#footer .footer-top .footer-contact p:nth-child(2)',
                'ContactPays': '#footer .footer-top .footer-contact p:nth-child(3)',
                'ContactTelephone': '#footer .footer-top .footer-contact p:nth-child(4) span',
                'ContactEmail': '#footer .footer-top .footer-contact p:nth-child(5) span'
            };

            for (const inputId in contactSelectors) {
                const input = document.getElementById(inputId);
                const element = document.querySelector(contactSelectors[inputId]);
                
                if (input && element) {
                    input.addEventListener('input', function() {
                        element.textContent = input.value.trim() || element.textContent;
                    });
                }
            }
        });

        // Drag-and-drop functionality for the form modal
        let isDragging = false;
        let currentX = 0;
        let currentY = 0;
        let initialX = 0;
        let initialY = 0;
        let xOffset = 0;
        let yOffset = 0;

        const divElement = document.getElementById('formulaire');
        const header = document.getElementById('divHeader');

        // Desktop events
        header.addEventListener('mousedown', dragStart);
        document.addEventListener('mouseup', dragEnd);
        document.addEventListener('mousemove', drag);

        // Mobile events
        header.addEventListener('touchstart', dragStart);
        document.addEventListener('touchend', dragEnd);
        document.addEventListener('touchmove', drag);

        function dragStart(e) {
            e.preventDefault();
            
            if (e.type === 'touchstart') {
                initialX = e.touches[0].clientX - xOffset;
                initialY = e.touches[0].clientY - yOffset;
            } else {
                initialX = e.clientX - xOffset;
                initialY = e.clientY - yOffset;
            }

            isDragging = true;
            divElement.style.cursor = 'grabbing';
            divElement.style.boxShadow = '0 20px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.1)';
        }

        function dragEnd() {
            isDragging = false;
            divElement.style.cursor = 'move';
            divElement.style.boxShadow = '0 12px 40px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.1)';
        }

        function drag(e) {
            if (isDragging) {
                e.preventDefault();
                
                if (e.type === 'touchmove') {
                    currentX = e.touches[0].clientX - initialX;
                    currentY = e.touches[0].clientY - initialY;
                } else {
                    currentX = e.clientX - initialX;
                    currentY = e.clientY - initialY;
                }

                xOffset = currentX;
                yOffset = currentY;
                
                setDivPosition(currentX, currentY);
            }
        }

        function setDivPosition(x, y) {
            // Calculate boundary constraints
            const viewportWidth = window.innerWidth;
            const viewportHeight = window.innerHeight;
            const modalRect = divElement.getBoundingClientRect();
            
            const centerX = viewportWidth / 2;
            const centerY = viewportHeight / 2;
            
            // Calculate the position relative to center
            const newX = centerX + x;
            const newY = centerY + y;
            
            // Constrain to viewport with margins
            const margin = 20;
            const maxX = viewportWidth - modalRect.width / 2 - margin;
            const minX = modalRect.width / 2 + margin;
            const maxY = viewportHeight - modalRect.height / 2 - margin;
            const minY = modalRect.height / 2 + margin;
            
            const constrainedX = Math.min(Math.max(newX, minX), maxX);
            const constrainedY = Math.min(Math.max(newY, minY), maxY);
            
            // Calculate percentage for transform
            const leftPos = (constrainedX / viewportWidth) * 100;
            const topPos = (constrainedY / viewportHeight) * 100;
            
            divElement.style.left = `${leftPos}%`;
            divElement.style.top = `${topPos}%`;
            divElement.style.transform = 'translate(-50%, -50%)';
        }

        // Icon search functionality
        document.getElementById('iconSearch')?.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            
            document.querySelectorAll('.icon-item').forEach(item => {
                const iconName = item.dataset.icon.toLowerCase();
                if (iconName.includes(searchTerm)) {
                    item.style.display = 'flex';
                    // Highlight matching part
                    if (searchTerm) {
                        item.classList.add('text-primary');
                    } else {
                        item.classList.remove('text-primary');
                    }
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Add section highlight effect
        document.addEventListener('DOMContentLoaded', function() {
            const editIcons = document.querySelectorAll('.edit-icon');
            
            editIcons.forEach(icon => {
                icon.addEventListener('click', function() {
                    const parent = this.closest('section, div.container, div.row, div.col-md-6, div.icon-box, div.service-item');
                    
                    if (parent) {
                        parent.classList.add('highlight-section');
                        setTimeout(() => {
                            parent.classList.remove('highlight-section');
                        }, 1000);
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Éléments du formulaire
            const titleInput = document.getElementById('TitleServices');
            const descInput = document.getElementById('DescServices');
            const deleteCheckbox = document.getElementById('deleteServices');
            
            // Éléments de la section Services dans la page
            const servicesSection = document.getElementById('services');
            const servicesTitle = servicesSection.querySelector('.section-title h2');
            const servicesDescription = servicesSection.querySelector('.section-title p');

            // Mise à jour en temps réel du titre
            titleInput.addEventListener('input', function() {
                servicesTitle.textContent = this.value;
            });

            // Mise à jour en temps réel de la description
            descInput.addEventListener('input', function() {
                servicesDescription.textContent = this.value;
            });

            // Gestion de la suppression de la section
            deleteCheckbox.addEventListener('change', function() {
                servicesSection.style.display = this.checked ? 'none' : 'block';
            });

            // Initialisation avec les valeurs existantes
            titleInput.value = servicesTitle.textContent;
            descInput.value = servicesDescription.textContent;

            // Gestion des sous-sections (exemple pour formulaire5_1)
            const setupServiceItem = (formId, itemId) => {
                const form = document.getElementById(formId);
                const item = document.querySelector(`#${itemId}`);
                
                if(form && item) {
                    const titleInput = form.querySelector('input[type="text"]');
                    const descInput = form.querySelector('textarea');
                    const deleteCheckbox = form.querySelector('.delete-checkbox');

                    // Mise à jour titre
                    titleInput?.addEventListener('input', () => {
                        item.querySelector('.title').textContent = titleInput.value;
                    });

                    // Mise à jour description
                    descInput?.addEventListener('input', () => {
                        item.querySelector('.description').textContent = descInput.value;
                    });

                    // Suppression item
                    deleteCheckbox?.addEventListener('change', () => {
                        item.style.display = deleteCheckbox.checked ? 'none' : 'flex';
                    });
                }
            };

                // Initialisation pour chaque sous-section
                setupServiceItem('formulaire5_1', 'service-item-1');
                setupServiceItem('formulaire5_2', 'service-item-2');
                // Ajouter les autres sous-sections...
        });
    </script>
</body>
</html>