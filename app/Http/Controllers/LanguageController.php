<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function change(Request $request, string $locale)
    {
        $languages = ['fr', 'en', 'es'];

        if (!in_array($locale, $languages)) {
            abort(404);
        }

        session(['locale' => $locale]);

        return redirect()->back();
    }
}
