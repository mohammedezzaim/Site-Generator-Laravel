<?php

namespace App\Http\Controllers;

use App\Models\SiteGenerator;
use Illuminate\Http\Request;
use App\Enums\TemplateType;
use App\Services\DirectoryService;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Symfony\Component\Console\Input\Input;

class SiteGeneratorController extends Controller
{



    protected $directoryService;

    private $type = TemplateType::template1;


  

    public function store(Request $request)
    {
        
        // Validation
        $request->validate([
            'site_name' => 'required|string|max:255',
            'contact_phone' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'site_description' => 'required|string|max:255',
            'logo' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            // Envoi de l'image à Cloudinary
            $uploadedFileUrl = Cloudinary::upload($request->file('logo')->getRealPath(), [
                'folder' => 'logos', // Optionnel : Nom du dossier
            ])->getSecurePath();
        }


        if ($request->input("template_type") == 'template1') {
            $this->type = TemplateType::template1;
        }
        elseif($request->input("template_type") == 'template2'){
            $this->type = TemplateType::template2;
        }
        elseif($request->input("template_type") == 'template3'){
            $this->type = TemplateType::template3;
        }

        // // appel a methode create dossier vide
        // $this->create_vide_dossier($request->input('site_name'));

        // Création du site
        $site = SiteGenerator::create([
            'site_name' => $request->input('site_name'),
            'contact_phone' => $request->input('contact_phone'),
            'contact_email' => $request->input('contact_email'),
            'site_description' => $request->input('site_description'),
            'logo_url' => $uploadedFileUrl ?? null,
            'address' => $request->input('address'),
            'footer_info' => $request->input('footer_info'),
            'template_type' => $request->input("template_type"),
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('form.edit-component', ['id' => $site->id])
                         ->with('success', 'Le site a été créé avec succès !');

        // Redirection vers une route après la création
        // return redirect()->route('sites.index')->with('success', 'Le site a été créé avec succès !');

        // return redirect()->route('form.edit-component')->with('success', 'Le site a été créé avec succès !');
        
    }


    public function storePremium(Request $request)
    {

        // Validation
        $request->validate([
            'site_name' => 'required|string|max:255',
            'contact_phone' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'site_description' => 'required|string|max:255',
            'logo' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            // Envoi de l'image à Cloudinary
            $uploadedFileUrl = Cloudinary::upload($request->file('logo')->getRealPath(), [
                'folder' => 'logos', // Optionnel : Nom du dossier
            ])->getSecurePath();
        }


        if ($request->input("template_type") == 'template1') {
            $this->type = TemplateType::template1;
        } elseif ($request->input("template_type") == 'template2') {
            $this->type = TemplateType::template2;
        } elseif ($request->input("template_type") == 'template3') {
            $this->type = TemplateType::template3;
        }

        // // appel a methode create dossier vide
        // $this->create_vide_dossier($request->input('site_name'));

        // Création du site
        $site = SiteGenerator::create([
            'site_name' => $request->input('site_name'),
            'contact_phone' => $request->input('contact_phone'),
            'contact_email' => $request->input('contact_email'),
            'site_description' => $request->input('site_description'),
            'logo_url' => $uploadedFileUrl ?? null,
            'address' => $request->input('address'),
            'footer_info' => $request->input('footer_info'),
            'template_type' => $request->input("template_type"),
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('form.edit-template')
            ->with('success', 'Le site a été créé avec succès !');

        // Redirection vers une route après la création
        // return redirect()->route('sites.index')->with('success', 'Le site a été créé avec succès !');

        // return redirect()->route('form.edit-component')->with('success', 'Le site a été créé avec succès !');

    }
    // Afficher tous les sites générés par l'utilisateur connecté
    public function showUserSites()
    {
        $user = auth()->user(); // Récupère l'utilisateur connecté
        $siteGenerators = $user->siteGenerators; // Récupère tous les sites générés par l'utilisateur

        return view('user.sites', compact('siteGenerators'));
    }

    // create a dossier vide contient contient asset
    public function create_vide_dossier($folderName, $htmlCode, $cssCode)
    {
        // Appeler le service pour créer la structure de dossiers
        $message = $this->directoryService->createDirectoryStructure($folderName,$htmlCode,$cssCode);
        
    }

    public function destroy(SiteGenerator $site)
{
    try {
        $site->delete();
        return redirect()->back()->with('success', 'Site supprimé avec succès');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Erreur lors de la suppression : ' . $e->getMessage());
    }
}
}
