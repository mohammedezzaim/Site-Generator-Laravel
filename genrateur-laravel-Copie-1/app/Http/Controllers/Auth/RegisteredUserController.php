<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Diviser le champ name en firstname et lastname
        $fullName = explode(' ', $request->name, 2); // Diviser en deux parties au maximum
        $firstname = $fullName[0]; // Première partie (obligatoire)
        $lastname = $fullName[1] ?? ''; // Deuxième partie ou chaîne vide si absente


        // Création de l'utilisateur
        $user = User::create([
            'name' => $request->name,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => null, // Par défaut
            'address' => null, // Par défaut
        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
