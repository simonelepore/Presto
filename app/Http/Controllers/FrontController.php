<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // take ci fa prendere gli ultimi 6 announcements e orderBy ce li ordina in maniera decrescente in base alla data di creazione
    public function welcome() {
        $announcements = Announcement::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('announcements'));
    }

    public function categoryShow(Category $category) {
        return view('categoryShow', compact('category'));
    }
}