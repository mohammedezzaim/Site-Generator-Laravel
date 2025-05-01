<?php

use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\EditComponent;
use App\Http\Controllers\EditTemplateSidebar;
use App\Http\Controllers\InfoSiteWeb;
use App\Http\Controllers\MiddlewareDashboard;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteGeneratorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('acceuil.home');
})->name('homepage');

Route::get('/home',[MiddlewareDashboard::class,'index'])->name('home');

// Route pour les utilisateurs avec un code unique
Route::get('/home/user/{code}', [MiddlewareDashboard::class, 'user'])->name('home.user');

// Route pour les administrateurs avec un code unique
Route::get('/home/admin/{code}', [MiddlewareDashboard::class, 'admin'])->name('home.admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/templates', function(){
    return view('acceuil.templates');
})->name('templates');


Route::get('/user/templates', function(){
    return view('acceuil.templates');
})->name('templates');


require __DIR__.'/auth.php';


// site generateur:
Route::get('/gener-sit-web',[InfoSiteWeb::class,'index'])->name('gener-sit-web');


// start  template 1:


Route::get('templates/template1', [EditComponent::class, 'template1'])->name('form.template1');
Route::get('/edit-component', [EditComponent::class, 'template1'])->name('form.template1');
Route::post('/edit-component', [EditComponent::class, 'template1'])->name('form.template1');

Route::post('/download-modified-page', [EditComponent::class, 'downloadPage'])->name('download-page');




Route::get('templates/template1/blog-details',function () {
    return view('templates.template1.blog-details');
})->name('blog-details');

Route::get('templates/template1/blog', function () {
    return view('templates.template1.blog');
})->name('blog');

Route::get('templates/template1/portfolio-details',function() {
    return view('templates.template1.portfolio-details');
})->name('portfolio-details');

Route::get('templates/template1/services-details', function () {
    return view('templates.template1.services-details');
})->name('services-details');
// end  template 1 //;


// start  template 2:
Route::get('templates/template2', function () {
    return view('templates.template2.index');
})->name('template2');


Route::get('templates/template2/services-details', function () {
    return view('templates.template2.services-details');
})->name('template2.services-details');

// end  template 2 //;


// start  template 3:
Route::get('templates/template3', function () {
    return view('templates.template3.index');
})->name('template3');

// end  template 3 //;




Route::get('/templates/{template}', function ($template) {
    $allowedTemplates = ['template1', 'template2', 'template3']; // Liste des templates autorisés
    if (in_array($template, $allowedTemplates)) {
        return view("templates.$template.index"); // Charge le fichier Blade à partir de resources/views/templates/template1/index.blade.php
    }
    abort(404); // Si le template n'est pas trouvé, renvoie une erreur 404
});


Route::get('/templateviews/{template}', function ($template) {
    $allowedTemplates = ['template1', 'template2', 'template3']; // Liste des templates autorisés
    if (in_array($template, $allowedTemplates)) {
        return view("templateviews.$template.index"); // Charge le fichier Blade à partir de resources/views/templates/template1/index.blade.php
    }
    abort(404); // Si le template n'est pas trouvé, renvoie une erreur 404
});




Route::middleware('auth')->group(function () {
    Route::get('/sites', [SiteGeneratorController::class, 'showUserSites'])->name('user.sites');
    Route::post('/generate-site', [SiteGeneratorController::class, 'store'])->name('generate.site');
    Route::post('/generate-site-premium', [SiteGeneratorController::class, 'storePremium'])->name('generate.site.premium');
    Route::delete('/site/{site}', [SiteGeneratorController::class, 'destroy'])->name('siteGenerator.destroy');
});



Route::get('/upload-logo-get', function () {
    return view('form.upload');
});

Route::get('all-site-generate',[SiteGeneratorController::class, 'showUserSites'])->name('sites.index');



Route::get('edit-component',[EditComponent::class,'index'])->name('form.edit-component');
// Route::get('edit-component', [EditComponent::class, 'edit'])->name('form.edit.component');
Route::post('generate', [EditComponent::class, 'generate'])->name('form.generate');

Route::get('generateHt', [EditComponent::class, 'generateHt'])->name('form.generateHt');


// Route::get('/navbar/{id}', [NavbarController::class, 'getNavbar'])->name('navbar.get');


Route::get('/template1/{id}', [MiddlewareDashboard::class, 'showTemplate'])
     ->name('form.template1');

Route::delete('/sites/{site}', [MiddlewareDashboard::class, 'destroy'])->name('sites.destroy');




// start version update template with sidebar

Route::get('edit-template', [EditTemplateSidebar::class, 'affaichTemplateVersionPayant'])->name('form.edit-template');

Route::post('edit-template', [EditTemplateSidebar::class, 'updateTemplate'])->name('form.edit-template');

Route::get('/template-preview', [EditTemplateSidebar::class, 'affaichIFrame'])->name('template-preview');

Route::post('/download-version-payent', [EditTemplateSidebar::class, 'downloadPage'])->name('download-page-payant');

Route::get('/gener-sit-web-premium', [InfoSiteWeb::class, 'premium'])->name('gener-sit-web-premium');




// end version update template with sidebar