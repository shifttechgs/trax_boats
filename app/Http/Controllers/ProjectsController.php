<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProjectsController
{
    public function projectsPages(): View
    {
        return view('projects'); // or your actual view path
    }
}
