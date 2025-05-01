<?php

namespace App\Http\Controllers;

use App\Models\SiteContent;
use App\Models\SiteGenerator;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ZipArchive;

class EditTemplateSidebar extends Controller
{
    private $data = [
        // NaveBar
        'dataNav' => ["Home", "About", "Services", "Portfolio", "Pricing", "Team", "Blog", "Contact"],
        'srcLogo' => null,
        'btnNav' => "Get Start",
        'navColor' => "#ffffff",
        'DescTitle' => "Welcome to Our Website",
        'DescColor' => "#ffffff",
        'Desceription' => "We are team of talented designers making websites with Bootstrap",
        'image1' => null,
        // 1er Section
        'TitleAbout' => "Nous sommes libres de critiquer les choses",
        'DescriptionAbout' => "Laissez-les être eux-mêmes. Ce que nous menons à l’époque prévient le plus les douleurs et autres choses. Car il y a ici de moins en moins de rejet. Dit cela depuis parce que les aînés de droit. En effet, personne n’est censé tomber dans le plaisir lorsque les temps sont libérés.",
        'AboutColor' => "#ffffff",
        'AboutColor1' => "#ffffff",
        // Partie Box
        'boxes' => [
            [
                'icon' => "bi bi-buildings",
                'title' => "Eius provident",
                'description' => "Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem",
            ],
            [
                'icon' => "bi bi-clipboard-pulse",
                'title' => "Eius provident",
                'description' => "Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem",
            ],
            [
                'icon' => "bi bi-command",
                'title' => "Eius provident",
                'description' => "Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem",
            ],
            [
                'icon' => "bi bi-graph-up-arrow",
                'title' => "Eius provident",
                'description' => "Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem",
            ],
        ],
        // 3eme Section
        'TitleServices' => "Services",
        'DescServices' => "Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit",
        'services' => [
            [
                'titre' => "Lorem Ipsum",
                'description' => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident"
            ],
            [
                'titre' => "Dolor Sitema",
                'description' => "Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata"
            ],
            [
                'titre' => "Sed ut perspiciatis",
                'description' => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur"
            ],
            [
                'titre' => "Magni Dolores",
                'description' => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"
            ],
            [
                'titre' => "Nemo Enim",
                'description' => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque"
            ],
            [
                'titre' => "Eiusmod Tempor",
                'description' => "Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi"
            ],
        ],
        // Footer
        'TitleAppend' => "Append",
        'DescAppend' => "Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.",
        'social_links' => [
            'twitter' => "",
            'facebook' => "",
            'instagram' => "",
            'linkedin' => "",
        ],
        'ContactAdresse' => "A108 Adam Street",
        'ContactVille' => "New York, NY 535022",
        'ContactPays' => "United States",
        'ContactTelephone' => "+1 5589 55488 55",
        'ContactEmail' => "info@example.com",

    ];

    public function affaichTemplateVersionPayant()
    {
        $site_info = SiteGenerator::where('user_id', Auth::id())->latest()->first();
        $template_info = SiteContent::where('site_generator_id', $site_info->id)->first();

        $content = null;

        if ($site_info && $template_info) {

            // Si template1_id existe, récupérez les informations de la table template1
            $template_info = SiteContent::where('site_generator_id', $site_info->id)->first();
            $content = json_decode($template_info->content, true);
        } else {
            // Si template1_id est null, instanciez un nouveau modèle Template1
            $template_info = new SiteContent();
            $template_info->site_generator_id = $site_info->id;
            $template_info->content = stripslashes(json_encode($this->data));


            $content = json_decode($template_info->content, true);


            $content['DescTitle'] = $site_info->site_name;
            $content['Desceription'] = $site_info->site_description;
            $content['srcLogo'] = $site_info->logo_url;
            $content['ContactAdresse'] = $site_info->address;
            $content['ContactTelephone'] = $site_info->contact_phone;
            $content['ContactAdresse'] = $site_info->contact_email;


            // Enregistrez le modèle Template1
            $template_info->content = json_encode($content, JSON_UNESCAPED_UNICODE);
            $template_info->site_generator_id = $site_info->id;

            try {
                $template_info->save();
            } catch (\Exception $e) {
                dd($e->getMessage()); // Affiche le message d'erreur complet
            }
        }

        return view('form.edite-template-sidebar', ['template_info' => (object) $content]);
    }


    public function updateTemplate(Request $request)
    {
        $site_info = SiteGenerator::where('user_id', Auth::id())->latest()->first();
        $siteContent = SiteContent::firstOrCreate(
            ['site_generator_id' => $site_info->id],
            ['content' => '{}']
        );

        $content = json_decode($siteContent->content, true) ?? [];

        // Gestion des images
        if ($request->hasFile('srcLogo')) {
            $content['srcLogo'] = Cloudinary::upload($request->file('srcLogo')->getRealPath(), ['folder' => 'logos'])->getSecurePath();
        }

        if ($request->hasFile('image1')) {
            $content['image1'] = Cloudinary::upload($request->file('image1')->getRealPath(), ['folder' => 'logos'])->getSecurePath();
        }
        if ($request->hasFile('image2')) {
            $content['image2'] = Cloudinary::upload($request->file('image2')->getRealPath(), ['folder' => 'logos'])->getSecurePath();
        }
        if ($request->hasFile('image3')) {
            $content['image3'] = Cloudinary::upload($request->file('image3')->getRealPath(), ['folder' => 'logos'])->getSecurePath();
        }

        // Champs de base
        $content['DescTitle'] = $request->input('DescTitle', $content['DescTitle'] ?? null);
        $content['Desceription'] = $request->input('Desceription', $content['Desceription'] ?? null);
        $content['navColor'] = $request->input('couleur', $content['navColor'] ?? '#563d7c');
        $content['btnNav'] = $request->input('btnNav', $content['btnNav'] ?? null);
        $content['dataNav'] = $request->filled('dataNav') ? explode(',', $request->dataNav) : ($content['dataNav'] ?? []);

        // Section À Propos
        $content['TitleAbout'] = $request->input('TitleAbout', $content['TitleAbout'] ?? null);
        $content['DescriptionAbout'] = $request->input('DescriptionAbout', $content['DescriptionAbout'] ?? null);

        // Gestion des boîtes (nouvelle structure)
        $content['boxes'] = [];
        for ($i = 0; $i < 4; $i++) {
            $content['boxes'][$i] = [
                'icon' => $request->input("boxes.$i.icon", $content['boxes'][$i]['icon'] ?? 'bi bi-' . ['chat-left-dots', 'gem', 'inboxes', 'box-seam'][$i]),
                'title' => $request->input("boxes.$i.title", $content['boxes'][$i]['title'] ?? 'Titre ' . ($i + 1)),
                'description' => $request->input("boxes.$i.description", $content['boxes'][$i]['description'] ?? 'Description ' . ($i + 1) . '.')
            ];
        }

        // Section Services - Nouvelle structure
        $content['TitleServices'] = $request->input('TitleServices', $content['TitleServices'] ?? null);
        $content['DescServices'] = $request->input('DescServices', $content['DescServices'] ?? null);

        // Récupération des services depuis la requête
        $services = [];
        for ($i = 1; $i <= 6; $i++) {
            $services[] = [
                'titre' => $request->input("titre$i", ''),
                'description' => $request->input("description$i", '')
            ];
        }
        $content['services'] = $services;

        // Section Append
        $content['TitleAppend'] = $request->input('TitleAppend', $content['TitleAppend'] ?? null);
        $content['DescAppend'] = $request->input('DescAppend', $content['DescAppend'] ?? null);

        // Liens sociaux
        $content['social_links'] = [
            'twitter' => $request->input('LienTwitter', $content['social_links']['twitter'] ?? null),
            'facebook' => $request->input('LienFacebook', $content['social_links']['facebook'] ?? null),
            'instagram' => $request->input('LienInstagram', $content['social_links']['instagram'] ?? null),
            'linkedin' => $request->input('LienLinkedin', $content['social_links']['linkedin'] ?? null)
        ];

        // Contact
        $content['ContactAdresse'] = $request->input('ContactAdresse', $content['ContactAdresse'] ?? null);
        $content['ContactVille'] = $request->input('ContactVille', $content['ContactVille'] ?? null);
        $content['ContactPays'] = $request->input('ContactPays', $content['ContactPays'] ?? null);
        $content['ContactTelephone'] = $request->input('ContactTelephone', $content['ContactTelephone'] ?? null);
        $content['ContactEmail'] = $request->input('ContactEmail', $content['ContactEmail'] ?? null);

        // Sauvegarde
        $siteContent->content = json_encode($content, JSON_UNESCAPED_UNICODE);
        $siteContent->save();

        return redirect()->back()->with('success', 'Template mis à jour avec succès');
    }


    public function affaichIFrame()
    {
        $site_info = SiteGenerator::where('user_id', Auth::id())->latest()->first();

        $template_info = SiteContent::where('site_generator_id', $site_info->id)->first();




        $content = null;
        if ($site_info && $template_info) {
            $template_info = SiteContent::where('site_generator_id', $site_info->id)->first();
            $content = json_decode($template_info->content, true);
        } else {

            $template_info = new SiteContent();
            $template_info->site_generator_id = $site_info->id;
            $template_info->content = stripslashes(json_encode($this->data));

            $template_info->content['DescTitle'] = $site_info->site_name;
            $template_info->content['Desceription'] = $site_info->site_description;
            $template_info->content['srcLogo'] = $site_info->logo_url;
            $template_info->content['ContactAdresse'] = $site_info->address;
            $template_info->content['ContactTelephone'] = $site_info->contact_phone;
            $template_info->content['ContactAdresse'] = $site_info->contact_email;


            try {
                $template_info->save();
            } catch (\Exception $e) {
                dd($e->getMessage()); // Affiche le message d'erreur complet
            }
        }
        extract($content); // Cela va créer des variables comme $TitleAbout, $services, etc.
        return view('templates.template1.indexSidebar', compact(
            'dataNav',
            'srcLogo',
            'btnNav',
            'navColor',
            'DescTitle',
            'DescColor',
            'Desceription',
            'image1',
            'TitleAbout',
            'DescriptionAbout',
            'AboutColor',
            'AboutColor1',
            'boxes',
            'TitleServices',
            'DescServices',
            'services',
            'TitleAppend',
            'DescAppend',
            'social_links',
            'ContactAdresse',
            'ContactVille',
            'ContactPays',
            'ContactTelephone',
            'ContactEmail'
        ));
    }


    public function downloadPage()
    {       
        if (!Auth::check()) {
            return response()->json(['error' => 'Utilisateur non authentifié'], 401);
        } {

            $site_info = SiteGenerator::where('user_id', Auth::id())->latest()->first();

            $defaultTemplateType = $site_info->template_type;

            $template_info = SiteContent::where('site_generator_id', $site_info->id)->first();


            $content = json_decode($template_info->content, true);

            // **2. Rendre le contenu HTML**
            $html = view('templates/' . $defaultTemplateType . '/indexSidebar',  $content)->render();

            // **3. Modifier les liens pour qu'ils restent relatifs**
            $html = str_replace('http://127.0.0.1:8000/template1', '', $html);


            // **4. Créer un fichier temporaire pour le HTML**
            $htmlFilePath = storage_path('/page-modified-payent.html');
            file_put_contents($htmlFilePath, $html);

            // **5. Créer l'archive ZIP** (le code reste inchangé)
            $zipFilePath = storage_path('/page-archive.zip');
            $zip = new ZipArchive();

            if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
                $zip->addFile($htmlFilePath, 'index.html'); // Renommé en index.html
                $assetsPath = public_path($defaultTemplateType . '/assets');
                $this->addFolderToZip($assetsPath, $zip, 'assets');
                $zip->close();
            } else {
                return response()->json(['error' => 'Erreur lors de la création de l\'archive ZIP'], 500);
            }

            // **6. Servir le fichier ZIP pour téléchargement**
            return response()->download($zipFilePath)->deleteFileAfterSend(true);
        }
    }

    public function addFolderToZip($folderPath, ZipArchive $zip, $zipPath = '')
    {
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($folderPath),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file) {
            // Ignorer les "dots" (fichiers spéciaux comme . et ..)
            if (!$file->isDir()) {
                // Obtenir le chemin relatif
                $filePath = $file->getRealPath();
                $relativePath = $zipPath . '/' . substr($filePath, strlen($folderPath) + 1);

                // Ajouter le fichier au ZIP
                $zip->addFile($filePath, $relativePath);
            }
        }
    }
}
