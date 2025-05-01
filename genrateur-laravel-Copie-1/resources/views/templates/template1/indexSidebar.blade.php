<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Append Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href=" {{ asset('template1/assets/img/favicon.png') }}" rel="icon">
    <link href=" {{ asset('template1/assets/img/apple-touch-icon.png') }} " rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('template1/assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template1/assets/css/main.css') }} " rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <img id="logo-img" src="{{ $srcLogo }}" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    @if (isset($dataNav) && count($dataNav) > 0)
                        @foreach ($dataNav as $index => $link)
                            <li>
                                <a href="#{{ strtolower(str_replace(' ', '-', $link)) }}"
                                    class="nav-link {{ $loop->first ? 'active' : '' }}"
                                    id="nav-link-{{ $loop->iteration }}">
                                    {{ $link }}
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a id="nav-btn" class="btn-getstarted" href="#about">{{ $btnNav }}</a>

        </div>
    </header>

    <main class="main">

        <section id="hero" class="hero section dark-background">

            @if ($image1 == null)
                <img id="hero-bg-img" src="{{ asset('template1/assets/img/hero-bg.jpg') }}" alt=""
                    data-aos="fade-in">
            @else
                <img id="hero-bg-img" src="{{ $image1 }}" alt="" data-aos="fade-in">
            @endif

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 id="hero-title" data-aos="fade-up" data-aos-delay="100">{{ $DescTitle }}</h2>
                        <p id="hero-desc" data-aos="fade-up" data-aos-delay="200">{{ $Desceription }}</p>
                    </div>
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="sign-up-form"><input type="email" name="email"><input type="submit"
                                    value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
        <section id="about" class="about section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">

                    <div class="col-xl-5 content">
                        <h2 id="titre-apropos">{{ $TitleAbout }}</h2>
                        <p id="desc-apropos">{{ $DescriptionAbout }}</p>
                        <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">
                            @if (isset($boxes) && is_array($boxes))
                                @foreach ($boxes as $index => $box)
                                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                                        <div class="icon-box">
                                            <i id="icon-box-{{ $index + 1 }}"
                                                class="{{ $box['icon'] ?? 'bi bi-' . ['chat-left-dots', 'gem', 'inboxes', 'box-seam'][$index] }}"></i>
                                            <h3 id="titre-box-{{ $index + 1 }}">
                                                {{ $box['title'] ?? 'Titre ' . ($index + 1) }}</h3>
                                            <p id="desc-box-{{ $index + 1 }}">
                                                {{ $box['description'] ?? 'Description ' . ($index + 1) . '.' }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i + 1) * 100 }}">
                                        <div class="icon-box">
                                            <i id="icon-box-{{ $i + 1 }}"
                                                class="bi bi-{{ ['chat-left-dots', 'gem', 'inboxes', 'box-seam'][$i] }}"></i>
                                            <h3 id="titre-box-{{ $i + 1 }}">Titre {{ $i + 1 }}</h3>
                                            <p id="desc-box-{{ $i + 1 }}">Description {{ $i + 1 }}.</p>
                                        </div>
                                    </div>
                                @endfor
                            @endif
                        </div>
                    </div>

                </div>

            </div>
            </div>

        </section>
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
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section id="services" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <h2 id="titre-services" name="titre-services">{{ $TitleServices }}</h2>
                <p id="desc-services">{{ $DescServices }}</p>
            </div>
            <div class="container">
                <div class="row gy-4">
                    @if (isset($services) && is_array($services))
                        @foreach ($services as $index => $service)
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ 100 + $index * 100 }}">
                                <div class="service-item d-flex">
                                    <div class="icon flex-shrink-0">
                                        <i
                                            class="bi bi-{{ ['briefcase', 'card-checklist', 'bar-chart', 'binoculars', 'brightness-high', 'calendar4-week'][$index % 6] }}"></i>
                                    </div>
                                    <div>
                                        <h4 class="title">
                                            <a href="{{ route('services-details') }}" class="stretched-link">
                                                <span
                                                    id="titre-service-{{ $index + 1 }}">{{ $service['titre'] ?? '' }}</span>
                                            </a>
                                        </h4>
                                        <p class="description" id="desc-service-{{ $index + 1 }}">
                                            {{ $service['description'] ?? '' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>


    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">{{ $TitleAppend }}</span>
                    </a>
                    <p>{{ $DescAppend }}</p>

                    <div class="social-links d-flex mt-4">
                        <a href="{{ $social_links['twitter'] ?? '#' }}"><i class="bi bi-twitter-x"></i></a>
                        <a href="{{ $social_links['facebook'] ?? '#' }}"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $social_links['instagram'] ?? '#' }}"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $social_links['linkedin'] ?? '#' }}"><i class="bi bi-linkedin"></i></a>
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
                    <h4>Contact Us</h4>
                    <p id="contact-adresse">{{ $ContactAdresse }}</p>
                    <p id="contact-ville">{{ $ContactVille }}</p>
                    <p id="contact-pays">{{ $ContactPays }}</p>
                    <p class="mt-4"><strong>Phone:</strong> <span
                            id="contact-telephone">{{ $ContactTelephone }}</span></p>
                    <p><strong>Email:</strong> <span id="contact-email">{{ $ContactEmail }}</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="sitename">Append</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <script src="{{ asset('template1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('template1/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src=" {{ asset('template1/assets/vendor/aos/aos.js') }} "></script>
    <script src=" {{ asset('template1/assets/vendor/glightbox/js/glightbox.min.js') }} "></script>
    <script src=" {{ asset('template1/assets/vendor/purecounter/purecounter_vanilla.js') }} "></script>
    <script src="{{ asset('template1/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }} "></script>
    <script src=" {{ asset('template1/assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
    <script src=" {{ asset('template1/assets/vendor/swiper/swiper-bundle.min.js') }} "></script>

    <script src="{{ asset('template1/assets/js/main.js') }} "></script>

    <script>
        window.addEventListener('message', function(event) {
            // Vérifier l'origine du message en production !
            // if (event.origin !== 'votre-domaine.com') return;

            const data = event.data;

            // Remplacer toute la partie des services par ce code optimisé :
            for (let i = 1; i <= 6; i++) {
                if (data.type === `updateTitreService${i}`) {
                    const element = document.querySelector(`#titre-service-${i}`);
                    if (element) element.textContent = data.value;
                }
                if (data.type === `updateDescService${i}`) {
                    const element = document.querySelector(`#desc-service-${i}`);
                    if (element) element.textContent = data.value;
                }
            }
            if (data.type === 'updateDescTitle') {
                const titleElement = document.querySelector('#hero-title');
                if (titleElement) {
                    titleElement.textContent = data.value;
                }
            } else if (data.type === 'updateDesceription') {
                const descElement = document.querySelector('#hero-desc');
                if (descElement) {
                    descElement.textContent = data.value;
                }
            } else if (data.type === 'updateBtnNav') {
                const btnElement = document.querySelector('#nav-btn');
                if (btnElement) {
                    btnElement.textContent = data.value;
                    btnElement.href = `#${data.value.toLowerCase().replace(/\s+/g, '-')}`;
                }
            } else if (data.type === 'updateTitleAbout') {
                const titleAboutElement = document.querySelector('#titre-apropos');
                if (titleAboutElement) {
                    titleAboutElement.textContent = data.value;
                }
            } else if (data.type === 'updateDescAbout') {
                const descAboutElement = document.querySelector('#desc-apropos');
                if (descAboutElement) {
                    descAboutElement.textContent = data.value;
                }
            } else if (data.type === 'updateTitreServices') {
                const titleServicesElement = document.querySelector('#titre-services');
                if (titleServicesElement) {
                    titleServicesElement.textContent = data.value;
                }
            } else if (data.type === 'updateDescServices') {
                const descServicesElement = document.querySelector('#desc-services');
                if (descServicesElement) {
                    descServicesElement.textContent = data.value;
                }
            } else if (data.type === 'updateLogo') {
                const logoElement = document.querySelector('#logo-img');
                if (logoElement) {
                    logoElement.src = data.value;
                }
            } else if (data.type === 'updateHeroImage') {
                const heroBgImg = document.querySelector('#hero-bg-img');
                if (heroBgImg) {
                    heroBgImg.src = data.value;
                }
            } else if (data.type === 'updateIconBox1') {
                const iconBox1Element = document.querySelector('#icon-box-1');
                if (iconBox1Element) {
                    iconBox1Element.className = data.value;
                }
            } else if (data.type === 'updateTitreBox1') {
                const titreBox1Element = document.querySelector('#titre-box-1');
                if (titreBox1Element) {
                    titreBox1Element.textContent = data.value;
                }
            } else if (data.type === 'updateDescBox1') {
                const descBox1Element = document.querySelector('#desc-box-1');
                if (descBox1Element) {
                    descBox1Element.textContent = data.value;
                }
            } else if (data.type === 'updateIconBox2') {
                const iconBox2Element = document.querySelector('#icon-box-2');
                if (iconBox2Element) {
                    iconBox2Element.className = data.value;
                }
            } else if (data.type === 'updateTitreBox2') {
                const titreBox2Element = document.querySelector('#titre-box-2');
                if (titreBox2Element) {
                    titreBox2Element.textContent = data.value;
                }
            } else if (data.type === 'updateDescBox2') {
                const descBox2Element = document.querySelector('#desc-box-2');
                if (descBox2Element) {
                    descBox2Element.textContent = data.value;
                }
            } else if (data.type === 'updateIconBox3') {
                const iconBox3Element = document.querySelector('#icon-box-3');
                if (iconBox3Element) {
                    iconBox3Element.className = data.value;
                }
            } else if (data.type === 'updateTitreBox3') {
                const titreBox3Element = document.querySelector('#titre-box-3');
                if (titreBox3Element) {
                    titreBox3Element.textContent = data.value;
                }
            } else if (data.type === 'updateDescBox3') {
                const descBox3Element = document.querySelector('#desc-box-3');
                if (descBox3Element) {
                    descBox3Element.textContent = data.value;
                }
            } else if (data.type === 'updateIconBox4') {
                const iconBox4Element = document.querySelector('#icon-box-4');
                if (iconBox4Element) {
                    iconBox4Element.className = data.value;
                }
            } else if (data.type === 'updateTitreBox4') {
                const titreBox4Element = document.querySelector('#titre-box-4');
                if (titreBox4Element) {
                    titreBox4Element.textContent = data.value;
                }
            } else if (data.type === 'updateDescBox4') {
                const descBox4Element = document.querySelector('#desc-box-4');
                if (descBox4Element) {
                    descBox4Element.textContent = data.value;
                }
            } else if (data.type === 'updateTitleAppend') {
                const titleAppendElement = document.querySelector('.footer-about .sitename');
                if (titleAppendElement) {
                    titleAppendElement.textContent = data.value;
                }
            } else if (data.type === 'updateDescAppend') {
                const descAppendElement = document.querySelector('.footer-about p');
                if (descAppendElement) {
                    descAppendElement.textContent = data.value;
                }
            } else if (data.type === 'updateLienTwitter') {
                const lienTwitterElement = document.querySelector('.social-links a[href*="twitter.com"]');
                if (lienTwitterElement) {
                    lienTwitterElement.href = data.value;
                }
            } else if (data.type === 'updateLienFacebook') {
                const lienFacebookElement = document.querySelector('.social-links a[href*="facebook.com"]');
                if (lienFacebookElement) {
                    lienFacebookElement.href = data.value;
                }
            } else if (data.type === 'updateLienInstagram') {
                const lienInstagramElement = document.querySelector('.social-links a[href*="instagram.com"]');
                if (lienInstagramElement) {
                    lienInstagramElement.href = data.value;
                }
            } else if (data.type === 'updateLienLinkedin') {
                const lienLinkedinElement = document.querySelector('.social-links a[href*="linkedin.com"]');
                if (lienLinkedinElement) {
                    lienLinkedinElement.href = data.value;
                }
            } else if (data.type === 'updateContactAdresse') {
                const contactAdresseElement = document.querySelector('#contact-adresse');
                if (contactAdresseElement) {
                    contactAdresseElement.textContent = data.value;
                }
            } else if (data.type === 'updateContactVille') {
                const contactVilleElement = document.querySelector('#contact-ville');
                if (contactVilleElement) {
                    contactVilleElement.textContent = data.value;
                }
            } else if (data.type === 'updateContactPays') {
                const contactPaysElement = document.querySelector('#contact-pays');
                if (contactPaysElement) {
                    contactPaysElement.textContent = data.value;
                }
            } else if (data.type === 'updateContactTelephone') {
                const contactTelephoneElement = document.querySelector('#contact-telephone');
                if (contactTelephoneElement) {
                    contactTelephoneElement.textContent = data.value;
                }
            } else if (data.type === 'updateContactEmail') {
                const contactEmailElement = document.querySelector('#contact-email');
                if (contactEmailElement) {
                    contactEmailElement.textContent = data.value;
                }
            }  else if (data.type === 'updateNavLinks') {
                const ul = document.querySelector('#navmenu ul');
                if (!ul) return;

                ul.innerHTML = ''; // Vide la liste

                data.value.forEach((linkText, index) => {
                    const li = document.createElement('li');
                    const a = document.createElement('a');
                    a.href = `#${linkText.toLowerCase().replace(/\s+/g, '-')}`;
                    a.textContent = linkText;
                    a.classList.add('nav-link');
                    a.id = `nav-link-${index + 1}`;
                    if (index === 0) {
                        a.classList.add('active');
                    }
                    li.appendChild(a);
                    ul.appendChild(li);

                    // Mise à jour du bouton de navigation si le premier lien change
                    if (index === 0) {
                        const navBtn = document.querySelector('#nav-btn');
                        if (navBtn) {
                            navBtn.textContent = linkText;
                            navBtn.href = `#${linkText.toLowerCase().replace(/\s+/g, '-')}`;
                        }
                    }
                });
            }
        });
    </script>



<script>
// Dans le fichier de l'iframe (template-preview)
window.addEventListener('message', function(event) {
    const data = event.data;
    
    if (data.type === 'updateStyles') {
        // Appliquer les styles à l'élément cible
        const element = document.querySelector(data.target);
        if (element) {
            Object.assign(element.style, data.styles);
            
            // Sauvegarder les styles dans localStorage pour les conserver
            const stylesKey = `styles_${data.target}`;
            localStorage.setItem(stylesKey, JSON.stringify(data.styles));
        }
    }
});

</script>



<script>
// Dans le fichier iframe (template-preview)
document.addEventListener('DOMContentLoaded', function() {
    // Écouteur pour les éléments cliquables dans l'iframe
    document.querySelectorAll('[id^="titre-"], [id^="desc-"], [id^="icon-"], #hero-title, #hero-desc, #nav-btn, #titre-apropos, #desc-apropos, #titre-services, #desc-services, #contact-adresse, #contact-ville, #contact-pays, #contact-telephone, #contact-email').forEach(element => {
        element.addEventListener('click', function() {
            // Envoyer l'ID de l'élément cliqué au parent
            window.parent.postMessage({
                type: 'focusInput',
                elementId: this.id
            }, '*');
        });
    });
});
</script>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

