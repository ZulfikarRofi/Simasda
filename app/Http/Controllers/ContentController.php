<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Article;
use App\Models\Carousel;
use App\Models\Quick;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function articleRead($id)
    {
        $article = Article::find($id);
        return view('pages.articleread', compact('article'));
    }
    public function contentManage()
    {
        $carousel = Carousel::all();
        $article = Article::paginate(5);
        $quick = Quick::all();
        return view('pages.contentmanage', compact('article', 'quick', 'carousel'));
    }

    public function storeCarousel(Request $r)
    {
        $r->validate([
            'title' => 'required|string',
            'caption' => 'required|string',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $carousel = new Carousel();
        $carousel->title = $r->title;
        $carousel->caption = $r->caption;
        if ($r->file('images')) {
            $file = $r->file('images');
            $images_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('carousel', $images_name);
            $carousel->image = $images_name;
        }
        $carousel->save();

        return redirect('/');
    }

    public function CreateAnnounce(Request $request)
    {
        $request->validate([
            'announce_fill' => 'required|string|min:5'
        ]);

        $model = new Announce();
        $model->announce_fill = $request->announce_fill;
        $model->save();

        return redirect('/')->with('announce', 'New Announce has been published');
    }

    public function CreateArticle(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'caption' => 'required|string|min:3',
            'description' => 'required|string|min:5',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author' => 'string',
        ]);

        $model = new Article();
        $model->title = $request->title;
        $model->caption = $request->caption;
        $model->description = $request->description;
        $model->author = $request->author;
        if ($request->file('image')) {
            $file = $request->file('image');
            $image_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('contentimg', $image_name);
            $model->image = $image_name;
        }
        $model->save();

        print_r($model);
        return redirect('/')->with('article', 'New Article has been published');
    }

    public function deleteArticle($id)
    {
        $model = Article::find($id);
        $model->delete();

        return redirect('/')->with('delete', 'The Selected Article has been Deleted');
    }

    public function createQuick(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'caption' => 'required|string|min:3',
            'description' => 'required|string|min:5',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author' => 'string',
        ]);

        $quick = new Quick();
        $quick->title = $request->title;
        $quick->caption = $request->caption;
        $quick->description = $request->description;
        $quick->author = $request->author;
        if ($request->file('image')) {
            $file = $request->file('image');
            $image_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('contentimg', $image_name);
            $quick->image = $image_name;
        }
        $quick->save();

        return redirect('/contentmanage')->with('success', 'New Quick News Has Been Published');
    }
    public function deleteQuick($id)
    {
        $quick = Quick::find($id);
        $quick->delete();

        return redirect('/contentmanage')->with('delete', 'The Selected Quick News Has Been Deleted');
    }
}
