<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactController
{
    public function contactPage(): View
    {
        return view('contact'); // or your actual view path
    }
}
