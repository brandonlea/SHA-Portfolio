<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Settings;
use App\Models\Vouches;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use function Psy\debug;

class SystemController extends Controller
{
    public function settings() {
       $data = \DB::table('settings')->find(1);

        return view('settings')->with(['data' => $data]);
    }

    public function updateSettings(Request $request) {
        $settings = Settings::find(1);

        $settings->title = $request->title;
        $settings->skills = $request->skills;
        $settings->moto = $request->moto;
        $settings->about = $request->about_title;
        $settings->about_description = $request->about;

        $settings->save();

        return redirect(route('hub.settings'));
    }

    public function products() {
        return view('products');
    }

    public function createProducts(Request $request) {

        $title = $request->title;
        $short_description = $request->short_description;
        $description = $request->description;

        $image = time() . '.' . $request->file('image')->getClientOriginalExtension();

        $request->image->move(public_path('images'), $image);

        Portfolio::create([
           'title' => $title,
           'short_description' => $short_description,
           'description' => $description,
           'image' => asset('images/' . $image)
        ]);


        return redirect(route('hub.products'));
    }

    public function vouches() {
        return view('vouches');
    }

    public function createVouches(Request  $request) {
        $name = $request->name;
        $vouch = $request->vouch;
        $username = $request->username;

        Vouches::create([
            'name' => $name,
            'vouch' => $vouch,
            'username' => $username
        ]);

        return redirect(route('hub.vouches'));
    }

    public function ShowUpdateVouches($id) {

    }

    public function updateVouches(Request  $request) {

    }

}
