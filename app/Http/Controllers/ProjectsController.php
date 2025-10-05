<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProjectsController
{
    public function projectsPages(): View
    {
        return view('projects'); // or your actual view path
    }

    public function boat_repairsPages(): View
    {
        return view('boat_repairs'); // or your actual view path
    }

    public function boat_wrapsPages(): View
    {
        return view('boat_wraps'); // or your actual view path
    }

    public function custom_trailersPages(): View
    {
        return view('custom_trailers'); // or your actual view path
    }

    public function boat_recarpetingPages(): View
    {
        return view('boat_recarpeting'); // or your actual view path
    }

    public function conversionsPages(): View
    {
        return view('conversions'); // or your actual view path
    }

    public function trailer_repairsPages(): View
    {
        return view('trailer_repairs'); // or your actual view path
    }
}
