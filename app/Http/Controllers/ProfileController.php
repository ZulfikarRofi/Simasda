<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile()
    {
        $user = auth()->user();
        $profile = $user->profile;
        return view('pages.profile', compact('profile'));
    }

    public function postProfile(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'about' => 'required|min:5',
            'komisariat' => 'min:4',
            'jurusan' => 'min:4',
            'phone_number' => 'min:10',
            'photo_profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'email',
            'instagram' => 'min:4',
        ]);

        $np = new Profile();
        $np->user_id = $request->user_id;
        $np->about = $request->about;
        $np->komisariat = $request->komisariat;
        $np->jurusan = $request->jurusan;
        $np->phone_number = $request->phone_number;
        $np->email = $request->email;
        $np->instagram = $request->instagram;
        if ($request->file('photo_profile')) {
            $file = $request->file('photo_profile');
            $photoprofile_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('photo_profile', $photoprofile_name);
            $np->photo_profile = $photoprofile_name;
        }
        $np->save();

        return back()->with('success', 'Data saved');
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'about' => 'required|min:5',
            'komisariat' => 'min:4',
            'jurusan' => 'min:4',
            'phone_number' => 'min:10',
            'photo_profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'email',
            'instagram' => 'min:4',
        ]);

        $np = Profile::find($id);
        $np->user_id = $request->user_id;
        $np->about = $request->about;
        $np->komisariat = $request->komisariat;
        $np->jurusan = $request->jurusan;
        $np->phone_number = $request->phone_number;
        $np->email = $request->email;
        $np->instagram = $request->instagram;
        if ($request->file('photo_profile')) {
            $file = $request->file('photo_profile');
            $photoprofile_name = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('photo_profile', $photoprofile_name);
            $np->photo_profile = $photoprofile_name;
        }
        $np->save();

        return back()->with('success', 'Data saved');
    }
}
