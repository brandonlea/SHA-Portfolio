<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Settings;
use App\Models\Socials;
use App\Models\Vouches;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use function Psy\debug;

class SystemController extends Controller
{
    public function settings() {
       $data = \DB::table('settings')->find(1);

        return view('hub.settings')->with(['data' => $data]);
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
        $table = \DB::table('portfolios')->get();

        return view('hub.products.show')->with(['data' => $table]);
    }

    public function ShowUpdateProduct($id) {
        $table = \DB::table('portfolios')->find($id);
        return view('hub.products.update')->with(['data' => $table]);
    }

    public function updateProduct(Request $request, $id) {
        $product = Portfolio::find($id);
        $product->title = $request->title;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->link = $request->link;

        if($request->image !== null) {
            $image = time() . '.' . $request->file('image')->getClientOriginalExtension();

            $request->image->move(public_path('images'), $image);

            $product->image = asset('images/' . $image);
        }

        $product->save();

        return redirect(route('hub.products'));
    }

    public function showCreateProduct() {
        return view('hub.products.create');
    }

    public function createProducts(Request $request) {

        $title = $request->title;
        $short_description = $request->short_description;
        $description = $request->description;
        $link  = $request->link;

        $image = time() . '.' . $request->file('image')->getClientOriginalExtension();

        $request->image->move(public_path('images'), $image);

        Portfolio::create([
           'title' => $title,
           'short_description' => $short_description,
           'description' => $description,
           'link' => $link,
           'image' => asset('images/' . $image)
        ]);


        return redirect(route('hub.products'));
    }

    public function deleteProduct(Request $request, $id) {
        $exp = Portfolio::find($id);
        $exp->delete();

        return redirect(route('hub.products'));
    }

    public function vouches() {
        $table = \DB::table('vouches')->get();

        return view('hub.vouches.show')->with(['data' => $table]);
    }

    public function createVouchesStore(Request  $request) {
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

    public function createVouches() {
        $table = \DB::table('vouches')->get();

        return view('hub.vouches.create')->with(['data' => $table]);
    }

    public function updateVouchView($id) {
        $table = \DB::table('vouches')->find($id);

        return view('hub.vouches.update')->with(['data' => $table]);
    }

    public function updateVouches(Request  $request, $id) {
        $vouch = Vouches::find($id);

        $vouch->name = $request->name;
        $vouch->username = $request->username;
        $vouch->vouch = $request->vouch;

        $vouch->save();

        return redirect(route('hub.vouches'));
    }

    public function deleteVouches(Request $request, $id) {
        $exp = Vouches::find($id);
        $exp->delete();

        return redirect(route('hub.vouches'));
    }

    public function socials() {
        $table = \DB::table('socials')->get();

        return view('hub.socials.show')->with(['data' => $table]);
    }

    public function createSocialView() {
        return view('hub.socials.create');
    }

    public function createSocial(Request $request) {
        Socials::create([
            'icon' => $request->icon,
            'link' => $request->link,
            'active' => \request()->has('active')
        ]);

        return redirect(route('hub.socials'));
    }

    public function updateSocialView($id) {
        $table = \DB::table('socials')->find($id);

        return view('hub.socials.update')->with(['data' => $table]);
    }

    public function updateSocial(Request $request, $id) {
        $social = Socials::find($id);

        $social->icon = $request->icon;
        $social->link = $request->link;
        $social->active = \request()->has('active');

        $social->save();

        return redirect(route('hub.socials'));
    }

    public function deleteSocials(Request $request, $id) {
        $exp = Socials::find($id);
        $exp->delete();

        return redirect(route('hub.socials'));
    }

    public function experience() {
        $table = \DB::table('experiences')->get();

        return view('hub.experiences.show')->with(['data' => $table]);
    }

    public function createExperienceView() {
        return view('hub.experiences.create');
    }

    public function ExperienceUpdateView($id) {

        return view('hub.experiences.update')->with(['data' => \DB::table('experiences')->find($id)]);
    }

    public function createExperience(Request $request) {
        Experience::create([
            'icon' => $request->icon,
            'title' => $request->title,
            'date' => $request->date
        ]);

        return redirect(route('hub.experience'));
    }

    public function updateExperience(Request $request, $id) {
        $exp = Experience::find($id);

        $exp->icon = $request->icon;
        $exp->title = $request->title;
        $exp->date = $request->date;

        $exp->save();

        return redirect(route('hub.experience'));
    }

    public function deleteExperience(Request $request, $id) {
        $exp = Experience::find($id);
        $exp->delete();

        return redirect(route('hub.experience'));
    }

}
