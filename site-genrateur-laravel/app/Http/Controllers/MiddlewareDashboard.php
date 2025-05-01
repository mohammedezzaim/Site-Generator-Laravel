<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\SiteGenerator;
use App\Models\SiteContent;
class MiddlewareDashboard extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;

            if ($role === 'user') {
                // Générer un code unique pour l'utilisateur
                $code = Str::uuid();
                return redirect()->route('home.user', ['code' => $code]);

                // return redirect()->route('home.user');
            } elseif ($role === 'admin') {
                // Générer un code unique pour l'administrateur
                // $code = Str::uuid();
                // return redirect()->route('home.admin', ['code' => $code]);

                return redirect()->route('home.admin');
            }
        }

        return redirect()->route('login'); // Rediriger vers la page de connexion si non authentifié
    }

//     public function user($code)
//     {

//         // toutes les lignes de la table (tous les sites)

//         $SiteGenerators = SiteGenerator::all();

// foreach ($SiteGenerators as $siteContent) {
//     echo "<h3>SiteContent ID: {$siteContent}</h3>";
// }

//         $user = Auth::user();

//         // return view('dashboard', [
//         return view('layouts.app', [

//             'user' => $user,
//             'code' => $code,
//             'siteContents' => $SiteGenerators,
//         ]);
//     }


    
    public function user($code)
    {
        $siteGenerators = SiteGenerator::all(); // Renommez la variable pour la cohérence
        
        return view('layouts.app', [
            'user' => Auth::user(),
            'code' => $code,
            'siteGenerators' => $siteGenerators // Nom de variable corrigé
        ]);
    }
    public function admin($code)
    {
        $admin = Auth::user();
        return view('admin.dashboard-admin', [
            'admin' => $admin,
            'code' => $code,
        ]);
    }

    public function showTemplate($id)
{
    try {
        // Récupération des données
        $siteContent = SiteContent::where('site_generator_id', $id)->firstOrFail();
        
        // Conversion du JSON en tableau
        $data = $siteContent->content;

    
        // Vérification de la structure des données
        if (!is_array($data)) {
            throw new \Exception('Invalid content format');
        }

        return view('templates.template1.index', $data);

    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        abort(404, 'Site content not found');
    } catch (\Exception $e) {
        abort(500, 'Error loading template: ' . $e->getMessage());
    }
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

