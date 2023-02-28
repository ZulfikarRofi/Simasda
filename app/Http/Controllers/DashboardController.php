<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Article;
use App\Models\Quick;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardIndex()
    {
        $announce = Announce::all();
        $article = Article::all();
        $quick = Quick::all();
        return view('pages.dashboard', compact('announce', 'article', 'quick'));
    }
}
