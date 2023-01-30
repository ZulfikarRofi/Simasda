<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Article;
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
        $article = Article::all();
        return view('pages.contentmanage', compact('article'));
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
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'author' => 'string',
        ]);

        $model = new Article();
        $model->title = $request->title;
        $model->caption = $request->caption;
        $model->description = $request->description;
        $model->author = $request->author;
        $model->save();

        // $imageName = time() . '.' . $request->image->extenstion();
        // $request->image->move(public_path('/asssets/images'), $imageName);
        // print_r($model);

        // if (!$request->has('image')) {
        //     return response()->json(['message' => 'Missing File'], 422);
        // }
        return redirect('/')->with('article', 'New Article has been published');
        // ->with('image', $imageName);
    }
}
