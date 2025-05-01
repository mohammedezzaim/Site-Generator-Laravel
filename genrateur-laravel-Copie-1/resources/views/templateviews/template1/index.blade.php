<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Append Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href=" {{ asset('template1/assets/img/favicon.png') }}" rel="icon">
    <link href=" {{ asset('template1/assets/img/apple-touch-icon.png') }} " rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template1/assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('template1/assets/css/main.css') }} " rel="stylesheet">

    <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Append</h1><span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.html#hero" class="active">Home</a></li>
                    <li><a href="index.html#about">About</a></li>
                    <li><a href="index.html#services">Services</a></li>
                    <li><a href="index.html#portfolio">Portfolio</a></li>
                    <li><a href="index.html#pricing">Pricing</a></li>
                    <li><a href="index.html#team">Team</a></li>
                    <li><a href=" {{ route('blog') }}">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                    <li><a href="index.html#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="index.html#about">Get Started</a>

        </div>
    <div class="edit-icon" onclick="toggleForm('formulaire1')">
    </div>


    </header>



  <main class="main">

    <!-- Les modification de coder -->
    <div id="formulaire"
            style="display:none; margin-top: 20px; width: 50%; background-color: rgba(10, 2, 2, 0.9); border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1000; padding: 20px;">
        <form id="site-generator-form" action="" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- formulaire1 -->
                <div id="formulaire1" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire1')"></button>

                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information pour navbar</h1>
                    <div class="mb-3">
                        <label for="dataNav" style="color:white;margin-bottom: 10px">Entrez des mots séparés par des
                            virgules :</label>
                        <input type="text" id="dataNav" name="dataNav" class="form-control"
                            placeholder="Ex: home, about, services">
                    </div>


                    <div class="col-3">
                        <div>
                            <label for="logo" class="form-label" style="font-weight: bold; color: #555;">Upload
                                Logo</label>
                            <div class="proof">
                                <div class="imgArea_logo" data-title="">
                                    <input type="file" name="srcLogo" id="screenshoot_logo" hidden
                                        accept="image/*" />
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <h4>upload screenshot</h4>
                                    <p>image size must be less than <span>2MB</span></p>
                                </div>
                                <button class="btn_logo" type="button">select image</button>
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="btnNav" style="color:white;margin-bottom: 10px">Entrez le nom du bouton de
                            navigation :</label>
                        <input type="text" id="btnNav" name="btnNav" class="form-control"
                            placeholder="Get Start">
                    </div>
                </div>
                <!-- formulaire2 -->
                <div id="formulaire2" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire2')"></button>
                    <!-- <h1 class="text-center mb-4 fs-1 text-secondary">Les Information pour navbar</h1> -->

                    <div class="mb-3">
                        <label for="DescTitle" style="color:white;margin-bottom: 10px">Entrez la description du titre
                            :</label>
                        <input type="text" id="DescTitle" name="DescTitle" class="form-control"
                            placeholder="Welcome to Our Website">
                    </div>
                    <div class="mb-3">
                        <label for="Desceription" style="color:white;margin-bottom: 10px">Entrez la description
                            :</label>
                        <textarea id="Desceription" name="Desceription" class="form-control" rows="3"
                            placeholder="Description ici..."></textarea>
                    </div>


                    <div class="col-3">
                        <div>
                            <label for="logo" class="form-label" style="font-weight: bold; color: #555;">Upload
                                Logo</label>
                            <div class="proof">
                                <div class="imgArea_image1" data-title="">

                                    <input type="file" id="image1" name="image1" hidden accept="image/*" />
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <h4>upload screenshot</h4>
                                    <p>image size must be less than <span>2MB</span></p>
                                </div>
                                <button class="btn_image1" type="button">select image</button>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- formulaire3 -->
                <div id="formulaire3" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire3')"></button>
                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information de 1er Section</h1>
                    <div class="mb-3" style="color:white;margin-bottom: 10px">
                        <label for="TitleAbout" class="form-label">Entrez des mots séparés par des virgules :</label>
                        <input type="text" id="TitleAbout" name="TitleAbout" class="form-control"
                            placeholder="Nous sommes libres ..">
                    </div>
                    <div class="mb-3" style="color:white;margin-bottom: 10px">
                        <label for="DescriptionAbout" class="form-label">Entrez la description :</label>
                        <textarea id="DescriptionAbout" name="DescriptionAbout" class="form-control" rows="3"
                            placeholder="Description ici..."></textarea>
                    </div>

                </div>
                <!-- formulaire4 -->
                <div id="formulaire4" class="container-fluid position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire4')"></button>
                    <div class="row">
                        <!-- Première ligne -->
                        <div class="col-md-6 mb-4">
                            <div class="card p-3">
                                <label for="IconBox1" class="form-label">Icône Box 1</label>
                                <input type="text" id="IconBox1" name="IconBox1" class="form-control mb-2"
                                    placeholder="Icône Box 1">
                                <label for="TitreBox1" class="form-label">Titre Box 1</label>
                                <input type="text" id="TitreBox1" name="TitreBox1" class="form-control mb-2"
                                    placeholder="Titre Box 1">
                                <label for="DescBox1" class="form-label">Description Box 1</label>
                                <textarea id="DescBox1" name="DescBox1" class="form-control" rows="2" placeholder="Description Box 1"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card p-3">
                                <label for="IconBox2" class="form-label">Icône Box 2</label>
                                <input type="text" id="IconBox2" name="IconBox2" class="form-control mb-2"
                                    placeholder="Icône Box 2">
                                <label for="TitreBox2" class="form-label">Titre Box 2</label>
                                <input type="text" id="TitreBox2" name="TitreBox2" class="form-control mb-2"
                                    placeholder="Titre Box 2">
                                <label for="DescBox2" class="form-label">Description Box 2</label>
                                <textarea id="DescBox2" name="DescBox2" class="form-control" rows="2" placeholder="Description Box 2"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Deuxième ligne -->
                        <div class="col-md-6 mb-4">
                            <div class="card p-3">
                                <label for="IconBox3" class="form-label">Icône Box 3</label>
                                <input type="text" id="IconBox3" name="IconBox3" class="form-control mb-2"
                                    placeholder="Icône Box 3">
                                <label for="TitreBox3" class="form-label">Titre Box 3</label>
                                <input type="text" id="TitreBox3" name="TitreBox3" class="form-control mb-2"
                                    placeholder="Titre Box 3">
                                <label for="DescBox3" class="form-label">Description Box 3</label>
                                <textarea id="DescBox3" name="DescBox3" class="form-control" rows="2" placeholder="Description Box 3"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card p-3">
                                <label for="IconBox4" class="form-label">Icône Box 4</label>
                                <input type="text" id="IconBox4" name="IconBox4" class="form-control mb-2"
                                    placeholder="Icône Box 4">
                                <label for="TitreBox4" class="form-label">Titre Box 4</label>
                                <input type="text" id="TitreBox4" name="TitreBox4" class="form-control mb-2"
                                    placeholder="Titre Box 4">
                                <label for="DescBox4" class="form-label">Description Box 4</label>
                                <textarea id="DescBox4" name="DescBox4" class="form-control" rows="2" placeholder="Description Box 4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- formulaire5 -->
                <div id="formulaire5" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire5')"></button>
                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information de 3eme Section : Section Services
                    </h1>
                    <div class="mb-3">
                        <label for="TitleServices" style="color:white;margin-bottom: 10px">Entrez le titre de la
                            section :</label>
                        <input type="text" id="TitleServices" name="TitleServices" class="form-control"
                            placeholder="Titre de la section">
                    </div>
                    <div class="mb-3">
                        <label for="DescServices" style="color:white;margin-bottom: 10px">Entrez la description
                            :</label>
                        <textarea id="DescServices" name="DescServices" class="form-control" rows="3"
                            placeholder="Description ici..."></textarea>
                    </div>
                </div>
                <!-- formulaire5_1 -->
                <div id="formulaire5_1" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire5_1')"></button>
                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information de 3eme Section : Section Services
                    </h1>
                    <!-- <div class="mb-3">
                    <label for="IconBox5_1" style="color:white;margin-bottom: 10px">Entrez le chemin de l'icône Box 5_1 :</label>
                    <input type="text" id="IconBox5_1" name="IconBox5_1" class="form-control" placeholder="Icône Box 5_1">
                  </div> -->
                    <div class="mb-3">
                        <label for="TitreBox5_1" style="color:white;margin-bottom: 10px">Entrez le titre Box 1
                            :</label>
                        <input type="text" id="TitreBox5_1" name="TitreBox5_1" class="form-control"
                            placeholder="Titre Box 5_1">
                    </div>
                    <div class="mb-3">
                        <label for="DescBox5_1" style="color:white;margin-bottom: 10px">Entrez la description Box 1
                            :</label>
                        <textarea id="DescBox5_1" name="DescBox5_1" class="form-control" rows="2" placeholder="Description Box 5_1"></textarea>
                    </div>
                </div>
                <!-- formulaire5_2 -->
                <div id="formulaire5_2" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire5_2')"></button>
                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information de 3eme Section : Section Services
                    </h1>
                    <!-- <div class="mb-3">
                    <label for="IconBox5_2" style="color:white;margin-bottom: 10px">Entrez le chemin de l'icône Box 5_2 :</label>
                    <input type="text" id="IconBox5_2" name="IconBox5_2" class="form-control" placeholder="Icône Box 5_2">
                  </div> -->
                    <div class="mb-3">
                        <label for="TitreBox5_2" style="color:white;margin-bottom: 10px">Entrez le titre Box 2
                            :</label>
                        <input type="text" id="TitreBox5_2" name="TitreBox5_2" class="form-control"
                            placeholder="Titre Box 5_2">
                    </div>
                    <div class="mb-3">
                        <label for="DescBox5_2" style="color:white;margin-bottom: 10px">Entrez la description Box 2
                            :</label>
                        <textarea id="DescBox5_2" name="DescBox5_2" class="form-control" rows="2" placeholder="Description Box 5_2"></textarea>
                    </div>
                </div>
                <!-- formulaire5_3 -->
                <div id="formulaire5_3" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire5_3')"></button>
                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information de 3eme Section : Section Services
                    </h1>
                    <!-- <div class="mb-3">
                    <label for="IconBox5_3" style="color:white;margin-bottom: 10px">Entrez le chemin de l'icône Box 5_3 :</label>
                    <input type="text" id="IconBox5_3" name="IconBox5_3" class="form-control" placeholder="Icône Box 5_3">
                  </div> -->
                    <div class="mb-3">
                        <label for="TitreBox5_3" style="color:white;margin-bottom: 10px">Entrez le titre Box 3
                            :</label>
                        <input type="text" id="TitreBox5_3" name="TitreBox5_3" class="form-control"
                            placeholder="Titre Box 5_3">
                    </div>
                    <div class="mb-3">
                        <label for="DescBox5_3" style="color:white;margin-bottom: 10px">Entrez la description Box 3
                            :</label>
                        <textarea id="DescBox5_3" name="DescBox5_3" class="form-control" rows="2" placeholder="Description Box 5_3"></textarea>
                    </div>
                </div>
                <!-- formulaire5_4 -->
                <div id="formulaire5_4" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire5_4')"></button>
                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information de 3eme Section : Section Services
                    </h1>
                    <!-- <div class="mb-3">
                    <label for="IconBox5_4" style="color:white;margin-bottom: 10px">Entrez le chemin de l'icône Box 5_4 :</label>
                    <input type="text" id="IconBox5_4" name="IconBox5_4" class="form-control" placeholder="Icône Box 5_4">
                  </div> -->
                    <div class="mb-3">
                        <label for="TitreBox5_4" style="color:white;margin-bottom: 10px">Entrez le titre Box 4
                            :</label>
                        <input type="text" id="TitreBox5_4" name="TitreBox5_4" class="form-control"
                            placeholder="Titre Box 5_4">
                    </div>
                    <div class="mb-3">
                        <label for="DescBox5_4" style="color:white;margin-bottom: 10px">Entrez la description Box 4
                            :</label>
                        <textarea id="DescBox5_4" name="DescBox5_4" class="form-control" rows="2" placeholder="Description Box 5_4"></textarea>
                    </div>
                </div>
                <!-- formulaire5_5 -->
                <div id="formulaire5_5" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire5_5')"></button>
                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information de 3eme Section : Section Services
                    </h1>
                    <!-- <div class="mb-3">
                    <label for="IconBox5_5" style="color:white;margin-bottom: 10px">Entrez le chemin de l'icône Box 5_5 :</label>
                    <input type="text" id="IconBox5_5" name="IconBox5_5" class="form-control" placeholder="Icône Box 5_5">
                  </div> -->
                    <div class="mb-3">
                        <label for="TitreBox5_5" style="color:white;margin-bottom: 10px">Entrez le titre Box 5
                            :</label>
                        <input type="text" id="TitreBox5_5" name="TitreBox5_5" class="form-control"
                            placeholder="Titre Box 5_5">
                    </div>
                    <div class="mb-3">
                        <label for="DescBox5_5" style="color:white;margin-bottom: 10px">Entrez la description Box 5
                            :</label>
                        <textarea id="DescBox5_5" name="DescBox5_5" class="form-control" rows="2" placeholder="Description Box 5_5"></textarea>
                    </div>
                </div>
                <!-- formulaire5_6 -->
                <div id="formulaire5_6" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire5_6')"></button>
                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information de 3eme Section : Section Services
                    </h1>
                    <!-- <div class="mb-3">
                    <label for="IconBox5_6" style="color:white;margin-bottom: 10px">Entrez le chemin de l'icône Box 5_6 :</label>
                    <input type="text" id="IconBox5_6" name="IconBox5_6" class="form-control" placeholder="Icône Box 5_6">
                  </div> -->
                    <div class="mb-3">
                        <label for="TitreBox5_6" style="color:white;margin-bottom: 10px">Entrez le titre Box 6
                            :</label>
                        <input type="text" id="TitreBox5_6" name="TitreBox5_6" class="form-control"
                            placeholder="Titre Box 5_6">
                    </div>
                    <div class="mb-3">
                        <label for="DescBox5_6" style="color:white;margin-bottom: 10px">Entrez la description Box 6
                            :</label>
                        <textarea id="DescBox5_6" name="DescBox5_6" class="form-control" rows="2" placeholder="Description Box 5_6"></textarea>
                    </div>
                </div>

                  <!-- formulaire6 -->
                <div id="formulaire6" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire6')"></button>
                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information de Footer :</h1>
                    <div class="mb-3">
                        <label for="TitleAppend" style="color:white;margin-bottom: 10px">Entrez le titre de la section :</label>
                        <input type="text" id="TitleAppend" name="TitleAppend" class="form-control" placeholder="Titre de la section">
                    </div>
                    <div class="mb-3">
                        <label for="DescAppend" style="color:white;margin-bottom: 10px">Entrez la description :</label>
                        <textarea id="DescAppend" name="DescAppend" class="form-control" rows="3" placeholder="Description ici..."></textarea>
                    </div>
                </div>

                  <!-- LienTwitter -->
                <div id="LienTwitter" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('LienTwitter')"></button> 
                    <h1 class="text-center mb-4 fs-1 text-secondary">Les Information de Footer :</h1>
                    <div class="mb-3">
                        <label for="LienTwitter" style="color:white;margin-bottom: 10px">Entrez le lien de Twitter :</label>
                        <input type="text" id="LienTwitter" name="LienTwitter" class="form-control" placeholder="https://twitter.com/">
                    </div>
                </div>
                    <!-- LienFacebook --> 
                <div id="LienFacebook" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('LienFacebook')"></button>
                    <div class="mb-3">
                        <label for="LienFacebook" style="color:white;margin-bottom: 10px">Entrez le lien de Facebook :</label>
                        <input type="text" id="LienFacebook" name="LienFacebook" class="form-control" placeholder="https://facebook.com/">
                    </div>
                </div>
                    <!-- LienInstagram -->  
                <div id="LienInstagram" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('LienInstagram')"></button>
                    <div class="mb-3">
                        <label for="LienInstagram" style="color:white;margin-bottom: 10px">Entrez le lien de Instagram :</label>
                        <input type="text" id="LienInstagram" name="LienInstagram" class="form-control" placeholder="https://instagram.com/">
                    </div>
                </div>
                    <!-- LienLinkedin -->
                <div id="LienLinkedin" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('LienLinkedin')"></button>
                    <div class="mb-3">
                        <label for="LienLinkedin" style="color:white;margin-bottom: 10px">Entrez le lien de Linkedin :</label>
                        <input type="text" id="LienLinkedin" name="LienLinkedin" class="form-control" placeholder="https://linkedin.com/">
                    </div>
                </div>            
                
                <!-- formulaire7 -->
                <div id="formulaire7" class="form-group position-relative ">
                    <button type="button" class="btn-close position-relative bg-light top-0 end-0 " 
                            aria-label="Close" onclick="closeForm('formulaire7')"></button>
                    <h2 class="text-center mb-4">Informations de Contact</h2>
                    
                    <div class="mb-3">
                        <label for="ContactAdresse" class="form-label">Adresse (ligne 1)</label>
                        <input type="text" id="ContactAdresse" name="ContactAdresse" class="form-control" placeholder="Ex: A108 Adam Street">
                    </div>
                    <div class="mb-3">
                        <label for="ContactVille" class="form-label">Adresse (ligne 2)</label>
                        <input type="text" id="ContactVille" name="ContactVille" class="form-control" placeholder="Ex: New York, NY 535022">
                    </div>
                    <div class="mb-3">
                        <label for="ContactPays" class="form-label">Pays</label>
                        <input type="text" id="ContactPays" name="ContactPays" class="form-control" placeholder="Ex: United States">
                    </div>
                    <div class="mb-3">
                        <label for="ContactTelephone" class="form-label">Téléphone</label>
                        <input type="tel" id="ContactTelephone" name="ContactTelephone" class="form-control" placeholder="Ex: +1 5589 55488 55">
                    </div>
                    <div class="mb-3">
                        <label for="ContactEmail" class="form-label">Email</label>
                        <input type="email" id="ContactEmail" name="ContactEmail" class="form-control" placeholder="Ex: info@example.com">
                    </div>
                </div>

                



              <div class="text-center mt-4">
                  <button type="submit" class="btn btn-success me-3 px-4 py-2">
                      <i class="fas fa-cogs"></i> Générer
                  </button>
                  <button id="getButton" class="btn btn-primary px-4 py-2" onclick="downloadPage(event)">
                      <i class="fas fa-download"></i> Télécharger la Page
                  </button>
              </div>
        </form>
    </div>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('template1/assets/img/hero-bg.jpg') }} " alt="" data-aos="fade-in">

      <div class="container">
          <div class="row">
              <div class="col-lg-10">
                  <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Website</h2>
                  <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites
                      with Bootstrap</p>
              </div>
              <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
                  <form action="forms/newsletter.php" method="post" class="php-email-form">
                      <div class="sign-up-form"><input type="email" name="email"><input type="submit"
                              value="Subscribe"></div>
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                  </form>
                  <div class="edit-icon" onclick="toggleForm('formulaire2')">
                  </div>
              </div>
          </div>
      </div>

    </section>
    <!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <div class="col-xl-5 content">
                    <h3>About Us</h3>
                    <h2>Ducimus rerum libero reprehenderit cumque</h2>
                    <p>Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime. Enim
                        reiciendis minus et rerum hic non. Dicta quas cum quia maiores iure. Quidem nulla qui
                        assumenda incidunt voluptatem tempora deleniti soluta.</p>
                    <a href="#" class="read-more"><span>Read More</span><i
                            class="bi bi-arrow-right"></i></a>
                    <div class="edit-icon" onclick="toggleForm('formulaire3')">
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="edit-icon" onclick="toggleForm('formulaire4')">
                    </div>
                    <div class="row gy-4 icon-boxes">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-buildings"></i>
                                <h3>Eius provident</h3>
                                <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor
                                    voluptatem</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-clipboard-pulse"></i>
                                <h3>Rerum aperiam</h3>
                                <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates
                                    quia</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-command"></i>
                                <h3>Veniam omnis</h3>
                                <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur
                                    corrupti</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
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
    <!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="{{ asset('template1/assets/img/stats-bg.jpg') }} " alt="" data-aos="fade-in">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

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
    <!-- /Stats Section -->



    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
      <div class="edit-icon" onclick="toggleForm('formulaire5')">
      </div>

        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            
            <div class="service-item d-flex" onclick="toggleForm('formulaire5_1')">
              
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>              
                <h4 class="title"><a class="stretched-link">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
              <div class="edit-icon" onclick="toggleForm('formulaire5_1')"><</div>

            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex" onclick="toggleForm('formulaire5_2')">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><aclass="stretched-link">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>
              <div class="edit-icon" onclick="toggleForm('formulaire5_2')"><</div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex" onclick="toggleForm('formulaire5_3')">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
              <div class="edit-icon" onclick="toggleForm('formulaire5_3')"><</div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex" onclick="toggleForm('formulaire5_4')">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
              <div>
                <h4 class="title"><a  class="stretched-link">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
              <div class="edit-icon" onclick="toggleForm('formulaire5_4')"><</div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex" onclick="toggleForm('formulaire5_5')">
              <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
              <div class="edit-icon" onclick="toggleForm('formulaire5_5')"><</div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex" onclick="toggleForm('formulaire5_6')">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Eiusmod Tempor</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              </div>
              <div class="edit-icon" onclick="toggleForm('formulaire5_6')"><</div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>
    <!-- /Services Section -->

















    <!-- Features Section -->
   
    <!-- /Features Section -->

    <!-- Portfolio Section -->
    
    <!-- /Portfolio Section -->

    <!-- Pricing Section -->

    <!-- /Pricing Section -->

    <!-- Faq Section -->

    <!-- /Faq Section -->

    <!-- Team Section -->
  
    <!-- /Team Section -->









    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="{{ asset('template1/assets/img/cta-bg.jpg') }} " alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Call To Action</h3>              
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="cta-btn" href="#">Call To Action</a>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /Call To Action Section -->




    <!-- Testimonials Section -->
  
    <!-- /Testimonials Section -->

    <!-- Recent Posts Section -->
    
    <!-- /Recent Posts Section -->




  </main>


  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a class="logo d-flex align-items-center">
            <span class="sitename">Append</span>
            <div class="edit-icon" onclick="toggleForm('formulaire6')">
            </div>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a class="edit-icon" onclick="toggleForm('LienTwitter')"><i class="bi bi-twitter-x"></i></a>
            <a class="edit-icon" onclick="toggleForm('LienFacebook')"><i class="bi bi-facebook"></i></a>
            <a class="edit-icon" onclick="toggleForm('LienInstagram')"><i class="bi bi-instagram"></i></a>
            <a class="edit-icon" onclick="toggleForm('LienLinkedin')"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4 class="edit-icon" onclick="toggleForm('formulaire7')">Contact Us</h4>

                    
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p>United States</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="sitename">Append</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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

    <script src=" {{ asset('template1/assets/vendor/php-email-form/validate.js') }}"></script>


    <script src=" {{ asset('template1/assets/vendor/aos/aos.js') }} "></script>
    <script src=" {{ asset('template1/assets/vendor/glightbox/js/glightbox.min.js') }} "></script>
    <script src=" {{ asset('template1/assets/vendor/purecounter/purecounter_vanilla.js') }} "></script>
    <script src="{{ asset('template1/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }} "></script>
    <script src=" {{ asset('template1/assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
    <script src=" {{ asset('template1/assets/vendor/swiper/swiper-bundle.min.js') }} "></script>


    <!-- Lien JavaScript jQuery et Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Main JS File -->
    <script src="{{ asset('template1/assets/js/main.js') }} "></script>
</body>

</html>
