<?php

namespace App\Http\Controllers;

use App\Models\SiteGenerator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;
use ZipArchive;

use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;
use App\Models\SiteContent;

class EditComponent extends Controller
{
    protected $folderPath;

   

    public function index () {


        

        return view('form.edit-component'
        // , [
        //     'defaultTemplateType' => $defaultTemplateType,
        //     'navbars' => $jsonData['navbars'],
        //     'bodies' => $jsonData['bodies'], 
        //     'footers' => $jsonData['footers'], 
        // ]
    );
        
    }


    private $data = [
        // 'about'=>"",
        // 'Services'=>"",


        // NaveBar
        'dataNav'=>["Home" , "About" , "Services", "Portfolio" , "Pricing" , "Team" , "Blog" , "Contact"],
        'srcLogo'=>"assets/img/logo.png",
        'btnNav'=>"Get Start",
        'navColor'=> "#ffffff", 
        'DescTitle'=>"Welcome to Our Website",
        'DescColor'=> "#ffffff",
        'Desceription'=>"We are team of talented designers making websites with Bootstrap",
        'image1'=>"asset('template1/assets/img/hero-bg.jpg')",
        'fontFamily' => "Arial",
        'fontSize' => "16px",
        'fontColor' => "#000000",
        'logoSize' => "100px",
        'logoRound' => false,
        'navOpacity' => "100%",
        'navShadow' => false,
        // 1er Section
        'TitleAbout'=>"Nous sommes libres de critiquer les choses",
        'DescriptionAbout'=>"Laissez-les être eux-mêmes. Ce que nous menons à l’époque prévient le plus les douleurs et autres choses. Car il y a ici de moins en moins de rejet. Dit cela depuis parce que les aînés de droit. En effet, personne n’est censé tomber dans le plaisir lorsque les temps sont libérés.",
        'AboutColor'=>"#ffffff",
        'AboutColor1'=>"#ffffff",
        // Partie Box
        'IconBox1'=>"bi bi-buildings",
        'TitreBox1'=>"Eius provident",
        'DescBox1'=>"Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem",
        'IconBox2'=>"bi bi-clipboard-pulse",
        'TitreBox2'=>"Eius provident",
        'DescBox2'=>"Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem",
        'IconBox3'=>"bi bi-command",
        'TitreBox3'=>"Eius provident",
        'DescBox3'=>"Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem",
        'IconBox4'=>"bi bi-graph-up-arrow",
        'TitreBox4'=>"Eius provident",
        'DescBox4'=>"Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem",
        // 3eme Section
        'TitleServices'=>"Services",
        'DescServices'=>"Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit",

        'TitreBox5_1'=>"Lorem Ipsum",
        'DescBox5_1'=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",

        'TitreBox5_2'=>"Dolor Sitema",
        'DescBox5_2'=>"Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata",

        'TitreBox5_3'=>"Sed ut perspiciatis",
        'DescBox5_3'=>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",

        'TitreBox5_4'=>"Magni Dolores",
        'DescBox5_4'=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",

        'TitreBox5_5'=>"Nemo Enim",
        'DescBox5_5'=>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque",

        'TitreBox5_6'=>"Eiusmod Tempor",
        'DescBox5_6'=>"Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi",

        // Footer
        'TitleAppend'=>"Append",
        'DescAppend'=>"Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.",
        'LienTwitter'=>"",
        'LienFacebook'=>"",
        'LienInstagram'=>"",
        'LienLinkedin'=>"",
        'ContactAdresse'=>"A108 Adam Street",
        'ContactVille'=>"New York, NY 535022",
        'ContactPays'=>"United States",
        'ContactTelephone'=>"+1 5589 55488 55",
        'ContactEmail'=>"info@example.com",

    ];

    public function template1(Request $request)
    {
        $defaultTemplateType = SiteGenerator::where('user_id', Auth::id())->get()->last()->template_type;
        // $this->data['about'] = $request->input('nome', null); // Valeur par défaut null
        // $this->data['Services'] = $request->input('prenom', null); // Valeur par défaut null
        // $this->data['dataNav'] = $request->input('dataNav', null); // Valeur par défaut null

        // return view('templates.template1.index', $this->data);
        // Récupérer la valeur de 'dataNav' depuis la requête
        $inputDataNav = $request->input('dataNav', null); // Valeur par défaut null
        
        if ($inputDataNav) {
            // Diviser la chaîne par des virgules et enlever les espaces inutiles
            $this->data['dataNav'] = array_map('trim', explode(',', $inputDataNav));
        }

        /***start upload image ***/
        $srcLogo = "";
        if ($request->hasFile('srcLogo')) {
            // Envoi de l'image à Cloudinary
            $srcLogo = Cloudinary::upload($request->file('srcLogo')->getRealPath(), [
                'folder' => 'logos', // Optionnel : Nom du dossier
            ])->getSecurePath();
        }
        if ($srcLogo) {
            $this->data['srcLogo'] = $srcLogo;
        }

        $srcImage1 = asset('template1/assets/img/hero-bg.jpg');
        if ($request->hasFile('image1')) {
            // Envoi de l'image à Cloudinary
            $srcImage1 = Cloudinary::upload($request->file('image1')->getRealPath(), [
                'folder' => 'logos', // Optionnel : Nom du dossier
            ])->getSecurePath();
        }
        if ($srcImage1) {
            $this->data['image1'] = $srcImage1;
        }
        
        /***end upload image ***/

        // $this->data['srcLogo'] = $request->input('srcLogo', null);
        // $this->data['btnNav'] = $request->input('btnNav', null);
        // $this->data['DescTitle'] = $request->input('DescTitle', null);
        // $this->data['Desceription'] = $request->input('Desceription', null);


        $btnNav = $request->input('btnNav', null);
        if ($btnNav) {
            $this->data['btnNav'] = $btnNav;
        }

        $navColor = $request->input('navColor', null);
        if ($navColor) {
            $this->data['navColor'] = $navColor; 
        }
        $DescColor = $request->input('DescColor', null);
        if ($navColor) {
            $this->data['DescColor'] = $DescColor; 
        }


        $DescTitle = $request->input('DescTitle', null);
        if ($DescTitle) {
            $this->data['DescTitle'] = $DescTitle;
        }

    
        $Desceription= $request->input('Desceription', null);
        if ($Desceription) {
            $this->data['Desceription'] = $Desceription;
        }
        $TitleAbout= $request->input('TitleAbout', null);
        if ($TitleAbout) {
            $this->data['TitleAbout'] = $TitleAbout;
        }
        $DescriptionAbout= $request->input('DescriptionAbout', null);
        if ($DescriptionAbout) {
            $this->data['DescriptionAbout'] = $DescriptionAbout;
        }



        

        // Gestion des nouvelles variables
        $fontFamily = $request->input('fontFamily', 'Arial');
        if (in_array($fontFamily, ['Arial', 'Helvetica', 'Times New Roman', 'Open Sans'])) {
            $this->data['fontFamily'] = $fontFamily;
        }

        $fontSize = $request->input('fontSize', 16);
        if ($fontSize >= 10 && $fontSize <= 24) {
            $this->data['fontSize'] = $fontSize . 'px';
        }

        $fontColor = $request->input('fontColor', '#000000');
        if (preg_match('/^#[a-fA-F0-9]{6}$/', $fontColor)) {
            $this->data['fontColor'] = $fontColor;
        }

        $logoSize = $request->input('logoSize', 100);
        if ($logoSize >= 50 && $logoSize <= 200) {
            $this->data['logoSize'] = $logoSize . 'px';
        }

        $this->data['logoRound'] = $request->has('logoRound');
        $this->data['navShadow'] = $request->has('navShadow');

        $navOpacity = $request->input('navOpacity', 100);
        if ($navOpacity >= 0 && $navOpacity <= 100) {
            $this->data['navOpacity'] = $navOpacity . '%';
        }

        // Gestion des couleurs du bouton
        $btnColor = $request->input('btnColor', '#6366f1');
        if (preg_match('/^#[a-fA-F0-9]{6}$/', $btnColor)) {
            $this->data['btnColor'] = $btnColor;
        }

        $btnTextColor = $request->input('btnTextColor', '#ffffff');
        if (preg_match('/^#[a-fA-F0-9]{6}$/', $btnTextColor)) {
            $this->data['btnTextColor'] = $btnTextColor;
        }


        

        $AboutColor = $request->input('AboutColor', null);
        if ($AboutColor) {
            $this->data['AboutColor'] = $AboutColor; 
        }
        $AboutColor1 = $request->input('AboutColor1', null);
        if ($AboutColor1) {
            $this->data['AboutColor1'] = $AboutColor1; 
        }
            // partie Box
        $IconBox1= $request->input('IconBox1', null);
        if ($IconBox1) {
            $this->data['IconBox1'] = $IconBox1;
        }
        $IconBox2= $request->input('IconBox2', null);
        if ($IconBox2) {
            $this->data['IconBox2'] = $IconBox2;
        }
        $IconBox3= $request->input('IconBox3', null);
        if ($IconBox3) {
            $this->data['IconBox3'] = $IconBox3;
        }
        $IconBox4= $request->input('IconBox4', null);
        if ($IconBox4) {
            $this->data['IconBox4'] = $IconBox4;
        }
        $TitreBox1= $request->input('TitreBox1', null);
        if ($TitreBox1) {
            $this->data['TitreBox1'] = $TitreBox1;
        }
        $TitreBox2= $request->input('TitreBox2', null);
        if ($TitreBox2) {
            $this->data['TitreBox2'] = $TitreBox2;
        }
        $TitreBox3= $request->input('TitreBox3', null);
        if ($TitreBox3) {
            $this->data['TitreBox3'] = $TitreBox3;
        }
        $TitreBox4= $request->input('TitreBox4', null);
        if ($TitreBox4) {
            $this->data['TitreBox4'] = $TitreBox4;
        }
        $DescBox1= $request->input('DescBox1', null);
        if ($DescBox1) {
            $this->data['DescBox1'] = $DescBox1;
        }
        $DescBox2= $request->input('DescBox2', null);
        if ($DescBox2) {
            $this->data['DescBox2'] = $DescBox2;
        }
        $DescBox3= $request->input('DescBox3', null);
        if ($DescBox3) {
            $this->data['DescBox3'] = $DescBox3;
        }
        $DescBox4= $request->input('DescBox4', null);
        if ($DescBox4) {
            $this->data['DescBox4'] = $DescBox3;
        }

        ## 3eme Section
        $TitleServices= $request->input('TitleServices', null);
        if ($TitleServices) {
            $this->data['TitleServices'] = $TitleServices;
        }
        $DescServices= $request->input('DescServices', null);
        if ($DescServices) {
            $this->data['DescServices'] = $DescServices;
        }



        $TitreBox5_1= $request->input('TitreBox5_1', null);
        if ($TitreBox5_1) {
            $this->data['TitreBox5_1'] = $TitreBox5_1;
        }
        $DescBox5_1= $request->input('DescBox5_1', null);
        if ($DescBox5_1) {
            $this->data['DescBox5_1'] = $DescBox5_1;
        }
        $TitreBox5_2= $request->input('TitreBox5_2', null); 
        if ($TitreBox5_2) {
            $this->data['TitreBox5_2'] = $TitreBox5_2;
        }
        $DescBox5_2= $request->input('DescBox5_2', null);
        if ($DescBox5_2) {
            $this->data['DescBox5_2'] = $DescBox5_2;
        }
        $TitreBox5_3= $request->input('TitreBox5_3', null);
        if ($TitreBox5_3) {
            $this->data['TitreBox5_3'] = $TitreBox5_3;
        }
        $DescBox5_3= $request->input('DescBox5_3', null);
        if ($DescBox5_3) {
            $this->data['DescBox5_3'] = $DescBox5_3;
        }
        $TitreBox5_4= $request->input('TitreBox5_4', null);
        if ($TitreBox5_4) {
            $this->data['TitreBox5_4'] = $TitreBox5_4;
        }
        $DescBox5_4= $request->input('DescBox5_4', null);
        if ($DescBox5_4) {
            $this->data['DescBox5_4'] = $DescBox5_4;
        }
        $TitreBox5_5= $request->input('TitreBox5_5', null);
        if ($TitreBox5_5) {
            $this->data['TitreBox5_5'] = $TitreBox5_5;
        }
        $DescBox5_5= $request->input('DescBox5_5', null);
        if ($DescBox5_5) {
            $this->data['DescBox5_5'] = $DescBox5_5;
        }
        $TitreBox5_6= $request->input('TitreBox5_6', null);
        if ($TitreBox5_6) {
            $this->data['TitreBox5_6'] = $TitreBox5_6;
        }
        $DescBox5_6= $request->input('DescBox5_6', null);
        if ($DescBox5_6) {
            $this->data['DescBox5_6'] = $DescBox5_6;
        }

        // Footer
        $TitleAppend= $request->input('TitleAppend', null);
        if ($TitleAppend) {
            $this->data['TitleAppend'] = $TitleAppend;
        }
        $DescAppend= $request->input('DescAppend', null);
        if ($DescAppend) {
            $this->data['DescAppend'] = $DescAppend;
        }

        $LienTwitter= $request->input('LienTwitter', null);
        if ($LienTwitter) {
            $this->data['LienTwitter'] = $LienTwitter;
        }
        $LienFacebook= $request->input('LienFacebook', null);
        if ($LienFacebook) {
            $this->data['LienFacebook'] = $LienFacebook;
        }
        $LienInstagram= $request->input('LienInstagram', null);
        if ($LienInstagram) {
            $this->data['LienInstagram'] = $LienInstagram;
        }
        $LienLinkedin= $request->input('LienLinkedin', null);
        if ($LienLinkedin) {
            $this->data['LienLinkedin'] = $LienLinkedin;
        }
        $ContactAdresse= $request->input('ContactAdresse', null);
        if ($ContactAdresse) {
            $this->data['ContactAdresse'] = $ContactAdresse;
        }
        $ContactVille= $request->input('ContactVille', null);
        if ($ContactVille) {
            $this->data['ContactVille'] = $ContactVille;
        }
        $ContactPays= $request->input('ContactPays', null);
        if ($ContactPays) {
            $this->data['ContactPays'] = $ContactPays;
        }
        $ContactTelephone= $request->input('ContactTelephone', null);
        if ($ContactTelephone) {
            $this->data['ContactTelephone'] = $ContactTelephone;
        }
        $ContactEmail= $request->input('ContactEmail', null);
        if ($ContactEmail) {
            $this->data['ContactEmail'] = $ContactEmail;
        }


        

        // Debugging pour voir le tableau généré
        // Vous pouvez utiliser logger() ou dd() pour le debug en Laravel
        // logger($this->data['dataNav']);    

        //  print_r($this->data);
        // Retourner la vue avec les données
        

        $id = $request->query('id'); // ou $request->input('id')

            // SiteContent::create([
            //     'site_generator_id' => $id,
            //     'content' => $this->data,
            // ]);


            SiteContent::updateOrCreate(

                ['site_generator_id' => $id],     // condition

                ['content' => $this->data]        // insertion ou update

            );

    
        
        
        // Code existant pour récupérer les données...
        // (Toute la partie traitement des inputs reste inchangée)
        
        // Récupération des IDs d'éléments à supprimer
        $elementsToRemove = $request->input('elements_to_delete', null);
        $elementsToRemoveArray = [];
        
        if ($elementsToRemove) {
            // Convertir la chaîne en tableau (si envoyé comme "id1,id2,id3")
            $elementsToRemoveArray = array_map('trim', explode(',', $elementsToRemove));
        }

        // **2. Rendre le contenu HTML**
        $html = view('templates/' . $defaultTemplateType . '/index', $this->data)->render();

        // **3. Modifier les liens pour qu'ils restent relatifs**
        $html = str_replace('http://127.0.0.1:8000/template1', '', $html);
    
        // **Nouvelle étape : Supprimer les éléments par ID avec regex**
        if (!empty($elementsToRemoveArray)) {
            foreach ($elementsToRemoveArray as $elementId) {
                // Pattern qui cible un élément avec l'ID spécifié
                $pattern = '/<([a-z]+)[^>]*id=["\']' . preg_quote($elementId, '/') . '["\'][^>]*>.*?<\/\1>/is';
                // Supprimer l'élément complet avec son contenu
                $html = preg_replace($pattern, '', $html);
                
                // Pour les éléments auto-fermants (comme <input> ou <img>)
                $patternSelfClosing = '/<[^>]*id=["\']' . preg_quote($elementId, '/') . '["\'][^>]*\/>/i';
                $html = preg_replace($patternSelfClosing, '', $html);
            }
        }

        // **4. Créer un fichier temporaire pour le HTML**
        $htmlFilePath = storage_path('/page-modified.html');
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





    
    
  
  /**
   * Fonction utilitaire pour ajouter un dossier entier à une archive ZIP
   */
  
    



   private function addFolderToZip($folderPath, ZipArchive $zip, $zipPath = '')
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
     
 
     public function  generate (Request $request) {
         
         
         $defaultTemplateType = SiteGenerator::where('user_id', Auth::id())->get()->last();
         
         // Générer le contenu HTML et CSS
         $htmlContent = $this->siteGeneratorService->generateSiteHtml($request->all(), $defaultTemplateType);
 
         $cssContent = $this->siteGeneratorService->generateSiteCss($request->all());
 
         if (!$htmlContent || !$cssContent) {
             return redirect()->back()->with('error', 'Erreur lors de la génération du site.');
         }
 
 
         // $outputPaths = $this->siteGeneratorService->saveGeneratedSite($htmlContent, $cssContent);
         $this->folderPath = $outputPaths= $this->exportService->createSiteFolder($defaultTemplateType['site_name'], $htmlContent, $cssContent);
         // Appeler la méthode du service pour générer le fichier ZIP
         $zipPath = $this->exportService->generateZipFromFolder($this->folderPath, $defaultTemplateType['site_name']);
 
         // Retourner le fichier ZIP pour téléchargement et le supprimer après
         return response()->download($zipPath)->deleteFileAfterSend(true);
     
 
     }
 
     public function  generateHt (Request $request) {
         
         
         $defaultTemplateType = SiteGenerator::where('user_id', Auth::id())->get()->last();
         
         // Générer le contenu HTML et CSS
         $htmlContent = $this->siteGeneratorService->generateSiteHtml($request->all(), $defaultTemplateType);
 
         $cssContent = $this->siteGeneratorService->generateSiteCss($request->all());
 
         if (!$htmlContent || !$cssContent) {
             return redirect()->back()->with('error', 'Erreur lors de la génération du site.');
         }
 
         return view('components.vesiel', [
             'htmle' => $htmlContent 
         ]);
     
 
     }


     
    //  public function edit(Request $request){
    //     $id = $request->query('id'); // ou $request->input('id')

    //     SiteContent::create([
    //         'site_generator_id' => $id,
    //         'content' => $data,
    //     ]);
        
    //     return view('edit.site', compact('data'));
    // }

}

