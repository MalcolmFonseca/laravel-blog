<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'Email could not be added to newsletter'
            ]);
        }

        return redirect('/')->with('success', 'Signed up for newsletter');
    }
}
