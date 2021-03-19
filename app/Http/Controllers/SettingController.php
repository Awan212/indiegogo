<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index()
    {
        // dd(Auth::user()->profile()->country);
        return view('public.pages.settings.index');
    }

    public function setting()
    {
        return view('public.pages.settings.setting');
    }


    public function editProfile(Request $req)
    {
        $data = USer::find(Auth::user()->id);
        $data->first_name = $req->first_name;
        $data->last_name = $req->last_name;
        $data->country = $req->country;
        $data->city = $req->city;
        $data->postal_code = $req->postal_code;
        $data->short_description = $req->short_description;
        $data->about_me = $req->about_me;
        $data->facebook_link = $req->facebook_link;
        $data->twitter_link = $req->twitter_link;
        $data->youTube_link = $req->youtube_link;
        $data->IMDb_link = $req->imdb_link;
        $data->website_link = $req->website_link;
        $data->save();
        return back();
    }

    public function editSetting(Request $req)
    {
        $this->validate($req, [
            'current_password' => 'required',
            'password'     => 'required|min:8|confirmed',
            // 'confirm_password' => 'con',
        ]);
        if(Hash::check($req->current_password, Auth::user()->password))
        {
            $data = User::find(Auth::user()->id);
            $data->password = Hash::make($req->new_password);
            $data->save();
            return back()->with('message', 'Your Password change successfully.');
        }
        else
        {
            return back()->with('error', 'Your current Password not matched.');
        }
    }

    public function deactivate()
    {
        return back()->with('error', 'This function is under development.');
    }
}
