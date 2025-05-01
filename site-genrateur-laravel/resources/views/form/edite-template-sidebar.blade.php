<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Éditeur de Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/edite-template-sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<body class="dark-mode">
    <div id="left-panel" class="dark-mode">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Contrôles du Template</h4>

            <div id="close-panel-icon" style="margin-right: 40px;">
                <i class="fas fa-download" style="cursor: pointer;" style="margin-right: 10px;"></i>
            </div>

            <div id="close-panel-icon">
                <i class="fas fa-eye me-2" style="cursor: pointer;"></i>
            </div>
        </div>

        <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" id="darkModeToggle" style="background-color: #e84545"
                checked>
            <label class="form-check-label" for="darkModeToggle">Mode Sombre</label>
        </div>

        <form id="template-form" action="{{ route('form.edit-template') }}" method="post"
            enctype="multipart/form-data">
            @csrf

            <div class="card" id="card">

                <details class="warning">
                    <summary><i class="fas fa-home me-2"></i>Etape 1: Section Héros</summary>
                </details>

                <div class="section-content">


                    <div class="form-group">
                        <label for="logo">Logo :</label>
                        <div class="upload-container">
                            <div class="upload-area" id="logo-upload-area">
                                <div class="upload-content">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <div class="upload-text">Glissez-déposez votre logo ici</div>
                                    <div class="upload-hint">ou cliquez pour sélectionner un fichier</div>
                                </div>
                                <div class="upload-preview">
                                    <img id="logo-preview-image" src="" alt="Prévisualisation du logo">
                                </div>
                                <div class="upload-actions">
                                    <button type="button" class="btn-upload-action btn-change" id="logo-change-btn">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
                                    <button type="button" class="btn-upload-action btn-remove" id="logo-remove-btn">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="progress-container" id="logo-progress">
                                    <div class="progress-bar" id="logo-progress-bar"></div>
                                </div>
                                <input type="file" name="srcLogo" id="logo" accept="image/*"
                                    class="file-input" />
                            </div>
                        </div>
                    </div>



                    <div class="form-group input-with-settings">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="titre">Titre Héros :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                        <input type="text" class="form-control" id="titre" name="DescTitle"
                            value="{{ $template_info->DescTitle ?? 'Titre par défaut' }}">

                        <div class="settings-panel mt-2 p-3"
                            style="display: none; border-radius: 5px; border: 1px solid #ced4da;">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Couleur du texte</label>
                                    <input type="color" class="form-control form-control-color" id="titre-color"
                                        value="#000000">
                                </div>
                                <div class="col-md-4">
                                    <label>Taille de police</label>
                                    <select class="form-select" id="titre-size">
                                        <option value="14px">Petit</option>
                                        <option value="16px" selected>Moyen</option>
                                        <option value="18px">Grand</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Style</label>
                                    <select class="form-select" id="titre-style">
                                        <option value="normal">Normal</option>
                                        <option value="bold">Gras</option>
                                        <option value="italic">Italique</option>
                                    </select>
                                </div>
                            </div>
                            <hr style="background-color: #e84545; border: none; height: 5px;">
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <label>Alignement du texte</label>
                                    <select class="form-select" id="titre-align">
                                        <option value="left">Gauche</option>
                                        <option value="center" selected>Centre</option>
                                        <option value="right">Droite</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Hauteur de ligne</label>
                                    <input type="number" class="form-control" id="titre-line-height"
                                        value="1">
                                </div>
                                <div class="col-md-4">
                                    <label>Espacement des lettres</label>
                                    <input type="number" class="form-control" id="titre-letter-spacing"
                                        value="0">
                                </div>
                            </div>
                            <hr style="background-color: #e84545; border: none; height: 5px;">
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <label>Taille de la bordure</label>
                                    <input type="number" class="form-control" id="titre-border-width"
                                        value="0" min="0">
                                </div>
                                <div class="col-md-4">
                                    <label>Style de la bordure</label>
                                    <select class="form-select" id="titre-border-style">
                                        <option value="none">Aucun</option>
                                        <option value="solid">Solide</option>
                                        <option value="dashed">Pointillés</option>
                                        <option value="dotted">Pointillés</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Couleur de la bordure</label>
                                    <input type="color" class="form-control form-control-color"
                                        id="titre-border-color" value="#000000">
                                </div>
                            </div>
                            <hr style="background-color: #e84545; border: none; height: 5px;">
                            <div class="row mt-2">
                                <div class="col-12">
                                    <button type="button" class="btn btn-sm apply-settings"
                                        style="background-color: #e84545;color: white;">Appliquer</button>
                                    <button type="button" class="btn btn-sm btn-secondary close-settings"
                                        style="background-color: #e84545;color: white;"> Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="Desceription">Description Héros :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                        <textarea class="form-control" id="contenu" name="Desceription" rows="3">{{ $template_info->Desceription ?? 'Description par défaut.' }}</textarea>
                    </div>


                    <div class="form-group">
                        <label for="image1">Image d'arrière-plan Héros :</label>
                        <div class="upload-container">
                            <div class="upload-area" id="hero-image-upload-area">
                                <div class="upload-content">
                                    <i class="fas fa-image"></i>
                                    <div class="upload-text">Glissez-déposez votre image ici</div>
                                    <div class="upload-hint">ou cliquez pour sélectionner un fichier</div>
                                </div>
                                <div class="upload-preview">
                                    <img id="hero-image-preview-image" src=""
                                        alt="Prévisualisation de l'image">
                                </div>
                                <div class="upload-actions">
                                    <button type="button" class="btn-upload-action btn-change"
                                        id="hero-image-change-btn">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
                                    <button type="button" class="btn-upload-action btn-remove"
                                        id="hero-image-remove-btn">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="progress-container" id="hero-image-progress">
                                    <div class="progress-bar" id="hero-image-progress-bar"></div>
                                </div>
                                <input type="file" name="image1" id="image1" accept="image/*"
                                    class="file-input" />
                            </div>
                        </div>
                    </div>


                    {{-- <div class="form-group">
                            <label for="couleur">Couleur de fond :</label>
                            <input type="color" class="form-control form-control-color" id="couleur" name="couleur"
                                value="{{ $template_info->couleur ?? '#563d7c' }}" title="Choisir la couleur">
                        </div> --}}

                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="btnNav">Texte du bouton de navigation :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>

                        <input type="text" class="form-control" id="btnNav" name="btnNav"
                            value="{{ $template_info->btnNav ?? '' }}">
                    </div>

                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="nav-links-input">Liens de navigation (séparés par des virgules) :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                        <input type="text" class="form-control" id="nav-links-input" name="dataNav"
                            value="{{ is_string($template_info->dataNav) ? implode(',', json_decode($template_info->dataNav)) : '' }}">
                    </div>
                </div>

                <details class="info">
                    <summary><i class="fas fa-info-circle me-2"></i>Etape 2: Section À Propos</summary>
                </details>

                <div class="section-content">
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="TitleAbout">Titre :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>

                        <input type="text" class="form-control" id="titre-apropos" name="TitleAbout"
                            value="{{ $template_info->TitleAbout ?? 'À Propos de Nous' }}">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="DescriptionAbout">Description :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                        <textarea class="form-control" id="desc-apropos" name="DescriptionAbout" rows="3">{{ $template_info->DescriptionAbout ?? 'Description de la section à propos.' }}</textarea>
                    </div>
                </div>

                <details class="alert" style="margin-bottom: 5px;">
                    <summary><i class="fas fa-boxes me-2"></i>Etape 3: Boxes</summary>
                </details>

                <div class="section-content">
                    @if (isset($template_info->boxes) && is_array($template_info->boxes))
                        @foreach ($template_info->boxes as $index => $box)
                            @php
                                $boxNumber = $index + 1;
                            @endphp
                            <div class="form-group">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="IconBox{{ $boxNumber }}">Icone Box {{ $boxNumber }}
                                        :</label>
                                    <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                                </div>
                                <input type="text" class="form-control" id="icon-box-{{ $boxNumber }}"
                                    name="boxes[{{ $index }}][icon]"
                                    value="{{ $box['icon'] ?? 'bi bi-' . ['chat-left-dots', 'gem', 'inboxes', 'box-seam'][$index] }}">
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="TitreBox{{ $boxNumber }}">Titre Box {{ $boxNumber }} :</label>
                                    <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                                </div>



                                <input type="text" class="form-control" id="titre-box-{{ $boxNumber }}"
                                    name="boxes[{{ $index }}][title]"
                                    value="{{ $box['title'] ?? 'Titre ' . $boxNumber }}">
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="DescBox{{ $boxNumber }}">Description Box {{ $boxNumber }}
                                        :</label>
                                    <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                                </div>
                                <textarea class="form-control" id="desc-box-{{ $boxNumber }}" name="boxes[{{ $index }}][description]"
                                    rows="2">{{ $box['description'] ?? 'Description ' . $boxNumber . '.' }}</textarea>
                            </div>
                            <hr class="my-3">
                        @endforeach
                    @else
                        @for ($i = 0; $i < 4; $i++)
                            @php
                                $boxNumber = $i + 1;
                                $defaultIcons = [
                                    'bi bi-chat-left-dots',
                                    'bi bi-gem',
                                    'bi bi-inboxes',
                                    'bi bi-box-seam',
                                ];
                            @endphp
                            <div class="form-group">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="IconBox{{ $boxNumber }}">Icone Box {{ $boxNumber }}
                                        :</label>
                                    <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                                </div>
                                <input type="text" class="form-control" id="icon-box-{{ $boxNumber }}"
                                    name="boxes[{{ $i }}][icon]"
                                    value="{{ old('boxes.' . $i . '.icon') ?? $defaultIcons[$i] }}">
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="TitreBox{{ $boxNumber }}">Titre Box {{ $boxNumber }} :</label>
                                    <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                                    <input type="text" class="form-control" id="titre-box-{{ $boxNumber }}"
                                        name="boxes[{{ $i }}][title]"
                                        value="{{ old('boxes.' . $i . '.title') ?? 'Titre ' . $boxNumber }}">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">

                                        <label for="DescBox{{ $boxNumber }}">Description Box {{ $boxNumber }}
                                            :</label>
                                        <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                                    </div>

                                    <textarea class="form-control" id="desc-box-{{ $boxNumber }}" name="boxes[{{ $i }}][description]"
                                        rows="2">{{ old('boxes.' . $i . '.description') ?? 'Description ' . $boxNumber . '.' }}</textarea>
                                </div>
                                @if ($i < 3)
                                    <hr class="my-3">
                                @endif
                        @endfor
                    @endif
                </div>

                <details class="success">
                    <summary><i class="fas fa-cogs me-2"></i>Etape 4: Services</summary>
                </details>

                <div class="section-content">
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="TitleServices">Titre :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>

                        <input type="text" class="form-control" id="titre-services" name="TitleServices"
                            value="{{ $template_info->TitleServices ?? 'Nos Services' }}">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="DescServices">Description :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>

                        <textarea class="form-control" id="desc-services" name="DescServices" rows="3">{{ $template_info->DescServices ?? 'Description de nos services.' }}</textarea>
                    </div>

                    @php
                        $servicesCount = 6;
                        $servicesData = [];

                        if (isset($template_info->services) && is_array($template_info->services)) {
                            $servicesData = $template_info->services;
                            while (count($servicesData) < $servicesCount) {
                                $servicesData[] = ['titre' => '', 'description' => ''];
                            }
                        } else {
                            for ($i = 0; $i < $servicesCount; $i++) {
                                $servicesData[] = [
                                    'titre' => old('titre' . ($i + 1)) ?? '',
                                    'description' => old('description' . ($i + 1)) ?? '',
                                ];
                            }
                        }
                    @endphp

                    @for ($i = 0; $i < $servicesCount; $i++)
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="titre-service-{{ $i + 1 }}">Titre Service {{ $i + 1 }}
                                    :</label>
                                <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                            </div>

                            <input type="text" class="form-control" id="titre-service-{{ $i + 1 }}"
                                name="titre{{ $i + 1 }}"
                                value="{{ $servicesData[$i]['titre'] ?? 'Service ' . ($i + 1) }}">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="desc-service-{{ $i + 1 }}">Description Service
                                    {{ $i + 1 }}
                                    :</label>
                                <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                            </div>

                            <textarea class="form-control" id="desc-service-{{ $i + 1 }}" name="description{{ $i + 1 }}"
                                rows="2">{{ $servicesData[$i]['description'] ?? 'Description du service ' . ($i + 1) . '.' }}</textarea>
                        </div>
                    @endfor
                </div>

                <details class="primary">
                    <summary><i class="fas fa-plus-circle me-2"></i>Etape 5: Section Append</summary>
                </details>

                <div class="section-content">
                    <hr class="my-4">
                    <h4>Section Append</h4>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="TitleAppend">Titre :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>

                        <input type="text" class="form-control" id="TitleAppend" name="TitleAppend"
                            value="{{ $template_info->TitleAppend ?? '' }}">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="DescAppend">Description :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                        <textarea class="form-control" id="DescAppend" name="DescAppend" rows="3">{{ $template_info->DescAppend ?? '' }}</textarea>
                    </div>
                </div>

                <details class="secondary">
                    <summary><i class="fas fa-share-alt me-2"></i>Etape 6: Liens Sociaux</summary>
                </details>

                <div class="section-content">
                    @if (isset($template_info->social_links))
                        @php
                            $socialLinksArray = $template_info->social_links;
                        @endphp
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                            <label for="LienTwitter">Lien Twitter :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                            <input type="text" class="form-control" id="LienTwitter" name="LienTwitter"
                                value="{{ $socialLinksArray['twitter'] ?? '' }}">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="LienFacebook">Lien Facebook :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                            <input type="text" class="form-control" id="LienFacebook" name="LienFacebook"
                                value="{{ $socialLinksArray['facebook'] ?? '' }}">
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                            <label for="LienInstagram">Lien Instagram :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>

                            <input type="text" class="form-control" id="LienInstagram" name="LienInstagram"
                                value="{{ $socialLinksArray['instagram'] ?? '' }}">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                            <label for="LienLinkedin">Lien LinkedIn :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                            <input type="text" class="form-control" id="LienLinkedin" name="LienLinkedin"
                                value="{{ $socialLinksArray['linkedin'] ?? '' }}">
                        </div>
                    @else
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                            <label for="LienTwitter">Lien Twitter :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                            <input type="text" class="form-control" id="LienTwitter" name="LienTwitter"
                                value="{{ old('LienTwitter') ?? '' }}">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                            <label for="LienFacebook">Lien Facebook :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                            <input type="text" class="form-control" id="LienFacebook" name="LienFacebook"
                                value="{{ old('LienFacebook') ?? '' }}">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                            <label for="LienInstagram">Lien Instagram :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                            <input type="text" class="form-control" id="LienInstagram" name="LienInstagram"
                                value="{{ old('LienInstagram') ?? '' }}">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                            <label for="LienLinkedin">Lien LinkedIn :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                            <input type="text" class="form-control" id="LienLinkedin" name="LienLinkedin"
                                value="{{ old('LienLinkedin') ?? '' }}">
                        </div>
                    @endif
                </div>

                <details class="dark">
                    <summary><i class="fas fa-address-book me-2"></i>Etape 7: Contact</summary>
                </details>

                <div class="section-content">
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="ContactAdresse">Adresse :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                        <input type="text" class="form-control" id="ContactAdresse" name="ContactAdresse"
                            value="{{ $template_info->ContactAdresse ?? '' }}">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="ContactVille">Ville :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                        <input type="text" class="form-control" id="ContactVille" name="ContactVille"
                            value="{{ $template_info->ContactVille ?? '' }}">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="ContactPays">Pays :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                        <input type="text" class="form-control" id="ContactPays" name="ContactPays"
                            value="{{ $template_info->ContactPays ?? '' }}">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="ContactTelephone">Téléphone :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                        <input type="text" class="form-control" id="ContactTelephone" name="ContactTelephone"
                            value="{{ $template_info->ContactTelephone ?? '' }}">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="ContactEmail">Email :</label>
                            <i class="fas fa-cog input-settings-icon" style="cursor: pointer;"></i>
                        </div>
                        <input type="email" class="form-control" id="ContactEmail" name="ContactEmail"
                            value="{{ $template_info->ContactEmail ?? '' }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="custom-submit-btn" id="update-preview-btn">
                update
            </button>
        </form>
    </div>

    <div id="right-panel" class="dark-mode">
        <iframe id="template-preview-frame" class="w-100 h-100" style="border: 1px solid #333; border-radius: 8px;"
            src="{{ url('/template-preview') }}">
        </iframe>
    </div>


    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Configuration
            const DEBOUNCE_DELAY = 300;
            const iframe = document.getElementById('template-preview-frame');
            const darkModeToggle = document.getElementById('darkModeToggle');
            const closePanelIcon = document.getElementById('close-panel-icon');
            const openPanelButton = document.getElementById('open-panel-button');
            const leftPanel = document.getElementById('left-panel');
            const rightPanel = document.getElementById('right-panel');

            // Variables globales pour stocker les fichiers
            let logoFile = null;
            let heroImageFile = null;

            // Fonction debounce pour limiter les appels fréquents
            function debounce(func, delay) {
                let timeout;
                return function() {
                    const context = this;
                    const args = arguments;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(context, args), delay);
                };
            }

            // Fonction sécurisée pour envoyer des messages à l'iframe
            function sendToIframe(type, value) {
                if (!iframe?.contentWindow) {
                    console.error('Iframe non disponible');
                    return;
                }

                try {
                    iframe.contentWindow.postMessage({
                        type,
                        value
                    }, '*');
                } catch (error) {
                    console.error('Erreur communication iframe:', error);
                }
            }

            // Initialisation des écouteurs avec gestion des erreurs
            function setupInputListener(selector, messageType) {
                const element = document.getElementById(selector);
                if (!element) return;

                element.addEventListener('input', debounce(() => {
                    sendToIframe(messageType, element.value);
                }, DEBOUNCE_DELAY));
            }

            // Gestion des fichiers images
            function handleImageUpload(inputElement, type) {
                inputElement.addEventListener('change', function() {
                    if (this.files && this.files[0]) {
                        const file = this.files[0];
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            // Envoyer l'image à l'iframe
                            sendToIframe(type, e.target.result);

                            // Stocker le fichier pour la soumission du formulaire
                            if (type === 'updateLogo') {
                                logoFile = file;
                            } else {
                                heroImageFile = file;
                            }
                        };

                        reader.readAsDataURL(file);
                    } else {
                        // Effacer l'image dans l'iframe si aucun fichier sélectionné
                        sendToIframe(type, '');
                        if (type === 'updateLogo') {
                            logoFile = null;
                        } else {
                            heroImageFile = null;
                        }
                    }
                });
            }

            // Fonction pour simuler un chargement progressif
            function simulateProgress(progressBar, logoProgress, callback) {
                const progressContainer = progressBar.parentElement;
                const logoProgressDiv = logoProgress
                const progressPercentage = document.createElement('div');
                progressPercentage.className = 'progress-percentage';
                logoProgressDiv.appendChild(progressPercentage);

                progressContainer.classList.add('active');

                let progress = 0;
                const interval = setInterval(() => {
                    progress += Math.random() * 10;
                    if (progress >= 100) {
                        progress = 100;
                        clearInterval(interval);
                        setTimeout(() => {
                            progressContainer.classList.remove('active');
                            if (callback) callback();
                        }, 300);
                    }
                    progressBar.style.width = progress + '%';
                    progressPercentage.textContent = Math.round(progress) + '%';
                }, 50);
            }

            // Fonction pour gérer l'upload d'image avec drag and drop intégré
            function setupImageUpload(uploadAreaId, inputId, previewImageId, logoProgressId, progressBarId, type) {
                const uploadArea = document.getElementById(uploadAreaId);
                const fileInput = document.getElementById(inputId);
                const previewImage = document.getElementById(previewImageId);
                const logoProgress = document.getElementById(logoProgressId);
                const progressBar = document.getElementById(progressBarId);
                const progressContainer = progressBar.parentElement;
                const changeBtn = document.getElementById(
                    `${uploadAreaId.replace('-upload-area', '')}-change-btn`);
                const removeBtn = document.getElementById(
                    `${uploadAreaId.replace('-upload-area', '')}-remove-btn`);

                // Gestion du clic sur la zone d'upload
                uploadArea.addEventListener('click', function(e) {
                    if (!e.target.closest('.btn-upload-action')) {
                        fileInput.click();
                    }
                });

                // Gestion du changement de fichier
                fileInput.addEventListener('change', function(e) {
                    if (this.files && this.files[0]) {
                        handleFileUpload(this.files[0]);
                    }
                });

                // Gestion du bouton changer
                if (changeBtn) {
                    changeBtn.addEventListener('click', function() {
                        fileInput.click();
                    });
                }

                // Gestion du drag and drop
                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                    uploadArea.addEventListener(eventName, preventDefaults, false);
                });

                function preventDefaults(e) {
                    e.preventDefault();
                    e.stopPropagation();
                }

                ['dragenter', 'dragover'].forEach(eventName => {
                    uploadArea.addEventListener(eventName, highlight, false);
                });

                ['dragleave', 'drop'].forEach(eventName => {
                    uploadArea.addEventListener(eventName, unhighlight, false);
                });

                function highlight() {
                    uploadArea.classList.add('dragover');
                }

                function unhighlight() {
                    uploadArea.classList.remove('dragover');
                }

                uploadArea.addEventListener('drop', function(e) {
                    const dt = e.dataTransfer;
                    const file = dt.files[0];
                    if (file && file.type.match('image.*')) {
                        handleFileUpload(file);
                        fileInput.files = dt.files; // Mettre à jour l'input file
                    }
                });

                // Gestion de la suppression
                removeBtn.addEventListener('click', function() {
                    resetFileUpload();
                });

                function handleFileUpload(file) {
                    if (!file.type.match('image.*')) {
                        alert('Veuillez sélectionner une image valide (JPEG, PNG, GIF, etc.)');
                        return;
                    }

                    // Afficher la progression
                    progressContainer.style.display = 'block';
                    simulateProgress(progressBar, logoProgress, () => {
                        progressContainer.style.display = 'none';
                    });

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        // Afficher la prévisualisation dans la zone d'upload
                        previewImage.src = e.target.result;
                        uploadArea.classList.add('has-image');

                        // Envoyer à l'iframe
                        sendToIframe(type, e.target.result);

                        // Stocker le fichier pour la soumission du formulaire
                        if (type === 'updateLogo') {
                            logoFile = file;
                        } else {
                            heroImageFile = file;
                        }
                    };
                    reader.readAsDataURL(file);
                }

                function resetFileUpload() {
                    // Réinitialiser l'input file
                    fileInput.value = '';

                    // Cacher la prévisualisation
                    uploadArea.classList.remove('has-image');
                    previewImage.src = '';

                    // Envoyer une chaîne vide à l'iframe pour effacer l'image
                    sendToIframe(type, '');

                    // Réinitialiser la variable de fichier
                    if (type === 'updateLogo') {
                        logoFile = null;
                    } else {
                        heroImageFile = null;
                    }
                }

                function formatFileSize(bytes) {
                    if (bytes === 0) return '0 Bytes';
                    const k = 1024;
                    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                    const i = Math.floor(Math.log(bytes) / Math.log(k));
                    return parseFloat((bytes / Math.pow(k, i)).toFixed(2) + ' ' + sizes[i]);
                }
            }

            // Initialisation des uploads d'images
            setupImageUpload(
                'logo-upload-area',
                'logo',
                'logo-preview-image',
                'logo-progress',
                'logo-progress-bar',
                'updateLogo'
            );

            setupImageUpload(
                'hero-image-upload-area',
                'image1',
                'hero-image-preview-image',
                'hero-image-progress',
                'hero-image-progress-bar',
                'updateHeroImage'
            );

            // Configuration centralisée des champs
            const fieldMappings = [
                // Hero Section
                {
                    id: 'titre',
                    type: 'updateDescTitle'
                },
                {
                    id: 'contenu',
                    type: 'updateDesceription'
                },
                {
                    id: 'btnNav',
                    type: 'updateBtnNav'
                },
                {
                    id: 'couleur',
                    type: 'updateCouleur'
                },
                {
                    id: 'nav-links-input',
                    type: 'updateNavLinks'
                },

                // About Section
                {
                    id: 'titre-apropos',
                    type: 'updateTitleAbout'
                },
                {
                    id: 'desc-apropos',
                    type: 'updateDescAbout'
                },

                // Boxes (1-4)
                ...Array.from({
                    length: 4
                }, (_, i) => i + 1).flatMap(boxNumber => [{
                        id: `icon-box-${boxNumber}`,
                        type: `updateIconBox${boxNumber}`
                    },
                    {
                        id: `titre-box-${boxNumber}`,
                        type: `updateTitreBox${boxNumber}`
                    },
                    {
                        id: `desc-box-${boxNumber}`,
                        type: `updateDescBox${boxNumber}`
                    }
                ]),

                // Services
                {
                    id: 'titre-services',
                    type: 'updateTitreServices'
                },
                {
                    id: 'desc-services',
                    type: 'updateDescServices'
                },

                // Append
                {
                    id: 'TitleAppend',
                    type: 'updateTitleAppend'
                },
                {
                    id: 'DescAppend',
                    type: 'updateDescAppend'
                },

                // Social Links
                {
                    id: 'LienTwitter',
                    type: 'updateLienTwitter'
                },
                {
                    id: 'LienFacebook',
                    type: 'updateLienFacebook'
                },
                {
                    id: 'LienInstagram',
                    type: 'updateLienInstagram'
                },
                {
                    id: 'LienLinkedin',
                    type: 'updateLienLinkedin'
                },

                // Contact
                {
                    id: 'ContactAdresse',
                    type: 'updateContactAdresse'
                },
                {
                    id: 'ContactVille',
                    type: 'updateContactVille'
                },
                {
                    id: 'ContactPays',
                    type: 'updateContactPays'
                },
                {
                    id: 'ContactTelephone',
                    type: 'updateContactTelephone'
                },
                {
                    id: 'ContactEmail',
                    type: 'updateContactEmail'
                }
            ];

            // Initialisation des champs standards
            fieldMappings.forEach(field => setupInputListener(field.id, field.type));

            // Initialisation des services dynamiques (1-6)
            for (let i = 1; i <= 6; i++) {
                setupInputListener(`titre-service-${i}`, `updateTitreService${i}`);
                setupInputListener(`desc-service-${i}`, `updateDescService${i}`);
            }

            // Gestion des uploads d'images
            handleImageUpload(document.getElementById('logo'), 'updateLogo');
            handleImageUpload(document.getElementById('image1'), 'updateHeroImage');

            // Gestion spéciale pour les liens de navigation (transformation en tableau)
            const navLinksInput = document.getElementById('nav-links-input');
            if (navLinksInput) {
                navLinksInput.addEventListener('input', debounce(() => {
                    const linksArray = navLinksInput.value.split(',').map(link => link
                        .trim());
                    sendToIframe('updateNavLinks', linksArray);
                }, DEBOUNCE_DELAY));
            }



            // Gestion du mode sombre
            if (darkModeToggle) {
                darkModeToggle.addEventListener('change', function() {
                    const isDark = this.checked;
                    document.body.classList.toggle('dark-mode', isDark);
                    leftPanel.classList.toggle('dark-mode', isDark);
                    rightPanel.classList.toggle('dark-mode', isDark);
                    sendToIframe('updateDarkMode', isDark);
                });
            }


            // Gestion des sections pliables
            const allDetails = document.querySelectorAll('details');
            allDetails.forEach(detail => {
                detail.open = false;
                detail.addEventListener('toggle', function() {
                    const sectionContent = this.nextElementSibling;
                    sectionContent.style.display = this.open ? 'block' : 'none';
                });
            });

            // Initialisation du redimensionnement
            function setupResizablePanels() {
                const leftPanel = document.getElementById('left-panel');
                const rightPanel = document.getElementById('right-panel');
                const resizeHandle = document.createElement('div');
                resizeHandle.className = 'resize-handle';
                leftPanel.appendChild(resizeHandle);

                let isResizing = false;
                let startX, startWidth;

                resizeHandle.addEventListener('mousedown', function(e) {
                    isResizing = true;
                    startX = e.clientX;
                    startWidth = leftPanel.offsetWidth;

                    document.body.style.cursor = 'col-resize';
                    document.body.style.userSelect = 'none';

                    document.addEventListener('mousemove', handleMouseMove);
                    document.addEventListener('mouseup', handleMouseUp);
                    e.preventDefault();
                });

                function handleMouseMove(e) {
                    if (!isResizing) return;

                    // Calculer la nouvelle largeur
                    const newWidth = startWidth + e.clientX - startX;

                    // Limiter entre 200px et 600px
                    const clampedWidth = Math.max(200, Math.min(600, newWidth));

                    // Mettre à jour le panneau gauche
                    leftPanel.style.width = clampedWidth + 'px';

                    // Synchroniser le panneau droit
                    rightPanel.style.marginLeft = clampedWidth - 'px';

                    // Ajuster l'iframe (solution optimale)
                    const iframe = document.getElementById('template-preview-frame');
                    iframe.style.width =
                        `calc(100% - ${clampedWidth}px)`; // S'adapte automatiquement au conteneur parent

                    // Solution alternative si nécessaire (décommenter si problème persiste)
                    iframe.style.width = `calc(100% - ${clampedWidth}px)`;

                    // Forcer le repaint pour fluidité
                    requestAnimationFrame(() => {
                        void leftPanel.offsetHeight;
                        void rightPanel.offsetHeight;
                    });
                }

                function handleMouseUp() {
                    isResizing = false;
                    document.body.style.cursor = '';
                    document.body.style.userSelect = '';

                    document.removeEventListener('mousemove', handleMouseMove);
                    document.removeEventListener('mouseup', handleMouseUp);
                }
            }

            // Appel initial
            setupResizablePanels();
            initializeValues();

            // Initialisation des valeurs au chargement
            function initializeValues() {
                // Envoyer toutes les valeurs initiales
                fieldMappings.forEach(field => {
                    const element = document.getElementById(field.id);
                    if (element?.value) sendToIframe(field.type, element.value);
                });

                // Envoyer les valeurs des services
                for (let i = 1; i <= 6; i++) {
                    const titreEl = document.getElementById(`titre-service-${i}`);
                    const descEl = document.getElementById(`desc-service-${i}`);
                    if (titreEl?.value) sendToIframe(`updateTitreService${i}`, titreEl.value);
                    if (descEl?.value) sendToIframe(`updateDescService${i}`, descEl.value);
                }

                // Envoyer la couleur initiale
                const colorInput = document.getElementById('couleur');
                if (colorInput) sendToIframe('updateCouleur', colorInput.value);
            }

            // Gestion des sections accordéon (un seul ouvert à la fois)
            document.querySelectorAll('#card details').forEach(detail => {
                detail.addEventListener('toggle', function() {
                    if (this.open) {
                        // Fermer tous les autres details
                        document.querySelectorAll('#card details').forEach(otherDetail => {
                            if (otherDetail !== this && otherDetail.open) {
                                otherDetail.open = false;
                            }
                        });
                    }
                });
            });

            // Attendre que l'iframe soit chargé
            iframe.addEventListener('load', initializeValues);

        });
    </script>


    <script>
        // Nouveau code pour le clic sur l'icône d'oeil
        const previewEyeIcon = document.querySelector('.fa-eye');
        previewEyeIcon.addEventListener('click', function() {
            const selectedTemplate =
                'indexSidebar'; // Remplacez par la logique pour obtenir le template sélectionné
            if (selectedTemplate) {

                window.location.href = `/template-preview`;

            } else {
                alert('Veuillez choisir un template avant de voir l\'aperçu.');
            }
        });

        // Nouveau code pour le clic sur l'icône de téléchargement
        document.querySelector('.fa-download').addEventListener('click', function() {
            const icon = this;

            // Ajouter un effet visuel pendant le chargement
            icon.classList.remove('fa-download');
            icon.classList.add('fa-spinner', 'fa-spin');

            // Créer et soumettre le formulaire
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = "{{ route('download-page-payant') }}";

            const csrfToken = document.createElement('input');
            csrfToken.type = 'hidden';
            csrfToken.name = '_token';
            csrfToken.value = "{{ csrf_token() }}";
            form.appendChild(csrfToken);

            document.body.appendChild(form);
            form.submit();

            // Réinitialiser l'icône après 5 secondes (au cas où)
            setTimeout(() => {
                icon.classList.remove('fa-spinner', 'fa-spin');
                icon.classList.add('fa-download');
            }, 5000);
        });
    </script>



    <script>
        // Dans le fichier parent (edite-template.php)
        window.addEventListener('message', function(event) {
            const data = event.data;

            if (data.type === 'focusInput') {
                // Mapper les IDs de l'iframe aux IDs des inputs dans le parent
                const idMapping = {
                    'hero-title': 'titre',
                    'hero-desc': 'contenu',
                    'nav-btn': 'btnNav',
                    'titre-apropos': 'titre-apropos',
                    'desc-apropos': 'desc-apropos',
                    'titre-services': 'titre-services',
                    'desc-services': 'desc-services',
                    'TitleAppend': 'TitleAppend',
                    'DescAppend': 'DescAppend',
                    'contact-adresse': 'ContactAdresse',
                    'contact-ville': 'ContactVille',
                    'contact-pays': 'ContactPays',
                    'contact-telephone': 'ContactTelephone',
                    'contact-email': 'ContactEmail',
                    'LienTwitter': 'LienTwitter',
                    'LienFacebook': 'LienFacebook',
                    'LienInstagram': 'LienInstagram',
                    'LienLinkedin': 'LienLinkedin'
                };

                // Ajouter les mappings pour les boxes (1-4)
                for (let i = 1; i <= 4; i++) {
                    idMapping[`titre-box-${i}`] = `titre-box-${i}`;
                    idMapping[`desc-box-${i}`] = `desc-box-${i}`;
                    idMapping[`icon-box-${i}`] = `icon-box-${i}`;
                }

                // Ajouter les mappings pour les services (1-6)
                for (let i = 1; i <= 6; i++) {
                    idMapping[`titre-service-${i}`] = `titre-service-${i}`;
                    idMapping[`desc-service-${i}`] = `desc-service-${i}`;
                }

                // Trouver l'input correspondant
                const inputId = idMapping[data.elementId];
                if (inputId) {
                    // Fermer tous les détails d'abord
                    document.querySelectorAll('#card details').forEach(detail => {
                        detail.open = false;
                        detail.nextElementSibling.style.display = 'none';
                    });

                    // Trouver l'input et son détail parent
                    const inputElement = document.getElementById(inputId);
                    if (inputElement) {
                        const detailsElement = inputElement.closest('.section-content').previousElementSibling;

                        // Ouvrir le détail correspondant
                        if (detailsElement && detailsElement.tagName === 'DETAILS') {
                            detailsElement.open = true;
                            detailsElement.nextElementSibling.style.display = 'block';
                        }

                        // Mettre le focus sur l'input
                        inputElement.focus();

                        // Faire défiler jusqu'à l'input
                        inputElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });

                        // Ajouter un effet visuel temporaire
                        inputElement.style.boxShadow = '0 0 0 0.25rem rgba(13, 110, 253, 0.5)';
                        setTimeout(() => {
                            inputElement.style.boxShadow = '';
                        }, 1000);
                    }
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Configuration des paramètres de style pour chaque input
            const styleConfigs = {
                'titre': {
                    target: '#hero-title', // Sélecteur dans l'iframe
                    properties: {
                        color: '#titre-color',
                        fontSize: '#titre-size',
                        fontWeight: '#titre-style',
                        textAlign: '#titre-align',
                        lineHeight: '#titre-line-height',
                        letterSpacing: '#titre-letter-spacing',
                        borderWidth: '#titre-border-width',
                        borderStyle: '#titre-border-style',
                        borderColor: '#titre-border-color'
                    }
                },
                'contenu': {
                    target: '#hero-desc',
                    properties: {
                        color: '#desc-color',
                        fontSize: '#desc-size',
                        fontStyle: '#desc-style',
                        textAlign: '#desc-align',
                        lineHeight: '#desc-line-height',
                        letterSpacing: '#desc-letter-spacing',
                        borderWidth: '#desc-border-width',
                        borderStyle: '#desc-border-style',
                        borderColor: '#desc-border-color',
                        borderRadius: '#desc-border-radius'
                    }
                },
                'titre-apropos': {
                    target: '#about-title',
                    properties: {
                        color: '#about-title-color',
                        fontSize: '#about-title-size',
                        fontWeight: '#about-title-style',
                        textAlign: '#about-title-align',
                        lineHeight: '#about-title-line-height',
                        letterSpacing: '#about-title-letter-spacing',
                        borderWidth: '#about-title-border-width',
                        borderStyle: '#about-title-border-style',
                        borderColor: '#about-title-border-color',
                        borderRadius: '#about-title-border-radius'
                    }
                },
                'desc-apropos': {
                    target: '#about-desc',
                    properties: {
                        color: '#about-desc-color',
                        fontSize: '#about-desc-size',
                        fontStyle: '#about-desc-style',
                        textAlign: '#about-desc-align',
                        lineHeight: '#about-desc-line-height',
                        letterSpacing: '#about-desc-letter-spacing',
                        borderWidth: '#about-desc-border-width',
                        borderStyle: '#about-desc-border-style',
                        borderColor: '#about-desc-border-color',
                        borderRadius: '#about-desc-border-radius'
                    }
                },
                // Ajoutez d'autres configurations pour chaque input ici
            };

            // Fonction pour envoyer les styles à l'iframe
            function sendStylesToIframe(inputId) {
                const config = styleConfigs[inputId];
                if (!config) return;

                const styles = {};
                let hasChanges = false;

                // Récupérer les valeurs des contrôles de style
                for (const [property, controlId] of Object.entries(config.properties)) {
                    const control = document.querySelector(controlId);
                    if (!control) continue;

                    let value;
                    if (control.type === 'color') {
                        value = control.value;
                    } else if (control.type === 'select-one') {
                        value = control.value;
                        // Convertir les valeurs textuelles en valeurs CSS
                        if (property === 'fontSize') {
                            value = {
                                small: '14px',
                                medium: '16px',
                                large: '18px'
                            } [value] || value;
                        } else if (property === 'fontWeight') {
                            value = value === 'bold' ? 'bold' : 'normal';
                        } else if (property === 'fontStyle') {
                            value = value === 'italic' ? 'italic' : 'normal';
                        }
                    } else if (control.type === 'number') {
                        value = control.value + 'px';
                    } else {
                        value = control.value;
                    }

                    if (value) {
                        styles[property] = value;
                        hasChanges = true;
                    }
                }

                if (hasChanges) {
                    // Envoyer les styles à l'iframe
                    const iframe = document.getElementById('template-preview-frame');
                    iframe.contentWindow.postMessage({
                        type: 'updateStyles',
                        target: config.target,
                        styles: styles
                    }, '*');
                }
            }

            // Gestion des icônes de paramètres
            document.querySelectorAll('.input-settings-icon').forEach(icon => {
                icon.addEventListener('click', function() {
                    const settingsPanel = this.closest('.input-with-settings').querySelector(
                        '.settings-panel');
                    settingsPanel.style.display = settingsPanel.style.display === 'block' ? 'none' :
                        'block';
                });
            });

            // Gestion des boutons fermer
            document.querySelectorAll('.close-settings').forEach(btn => {
                btn.addEventListener('click', function() {
                    this.closest('.settings-panel').style.display = 'none';
                });
            });

            // Appliquer les paramètres
            document.querySelectorAll('.apply-settings').forEach(btn => {
                btn.addEventListener('click', function() {
                    const inputId = this.closest('.input-with-settings').querySelector(
                        'input, textarea').id;
                    sendStylesToIframe(inputId);
                    this.closest('.settings-panel').style.display = 'none';
                });
            });

            // Mise à jour en temps réel pour les contrôles de style
            document.querySelectorAll('.settings-panel input, .settings-panel select').forEach(control => {
                control.addEventListener('change', function() {
                    const inputId = this.closest('.input-with-settings').querySelector(
                        'input, textarea').id;
                    sendStylesToIframe(inputId);
                });
            });

            // Initialisation des valeurs par défaut
            Object.keys(styleConfigs).forEach(inputId => {
                sendStylesToIframe(inputId);
            });

            // Gestion des messages depuis l'iframe
            window.addEventListener('message', function(event) {
                if (event.data.type === 'requestInitialStyles') {
                    // Envoyer tous les styles initiaux à l'iframe
                    Object.keys(styleConfigs).forEach(inputId => {
                        sendStylesToIframe(inputId);
                    });
                }
            });
        });
    </script>
</body>

</html>
