<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactMessage;
use Illuminate\View\Middleware\ShareErrorsFromSession;


class ContactController extends Controller
{
    public function contact(): View
    {
        return view('contact');
    }

    public function store(Request $request): RedirectResponse
    {
        // Je récupère les données de mon formulaire avec la request : 
            $data = $request->validate([
                 'name' => 'required|max:255', 
                 'email' => 'required|email', 
                 'message' => 'required', 
            ]);


            // J'appelle le mailer et je lui donne les données ($name, $email, $content) : 
            Mail::to('lemerre.alice@gmail.com')->send(new ContactForm($data['name'], $data['email'], $data['message']));

         // je redirige l'utilisateur vers la page contact : 
            
            return redirect()->route('contact.submitted');
    }

            public function submitted()
        {
            return view('contact-submitted');
        }
}
