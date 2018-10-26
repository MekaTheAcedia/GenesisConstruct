<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\albums;
use App\Models\songs;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterController extends Controller {
	public function indexSongs(Request $request) {
		$newsongs = songs::orderBy('uploaddate', '')->paginate(8);
		$discover = songs::inRandomOrder()->paginate(8);
		$newalbums = albums::orderBy('releasedate', '')->paginate(7);

		return view('index')->with([
			'newsongs' => $newsongs,
			'discover' => $discover,
			'newalbums' => $newalbums,
		]);
	}

	public function blog(Request $request) {
		return view('blog');
	}

	public function browse(Request $request) {
		return view('browse');
	}

	public function contact(Request $request) {
		return view('contact');
	}

	public function radio(Request $request) {
		return view('radio');
	}

	public function single(Request $request) {
		return view('single');
	}

	public function search(Request $request) {

		return view('search');
	}

	public function songsDetail(Request $request) {
		return view('single');
	}

	public function profile(Request $request) {
		return view('profile');
	}

	public function profiledetails(Request $request) {
		return view('profiledetails');
	}

	public function updateprofile(Request $request) {
		if (is_null($request->input('username'))) {
			$name = Auth::user()->name;
		} else {
			$name = $request->input('username');
		};
		if (is_null($request->input('email'))) {
			$email = Auth::user()->email;
		} else {
			$email = $request->input('email');
		};
		if (is_null($request->input('location'))) {
			$location = Auth::user()->location;
		} else {
			$location = $request->input('location');
		};
		if (is_null($request->input('password'))) {
			$password = Auth::user()->password;
		} else {
			$password = $request->input('password');
		};
		if (is_null($request->input('dob'))) {
			$dob = Auth::user()->dob;
		} else {
			$dob = $request->input('dob');
		};
		if (is_null($request->input('gender'))) {
			$gender = Auth::user()->gender;
		} else {
			$gender = $request->input('gender');
		};
		if (is_null($request->input('about'))) {
			$about = Auth::user()->about;
		} else {
			$about = $request->input('about');
		};
		user::where('id', Auth::id())->update([
			'name' => $name,
			'email' => $email,
			'location' => $location,
			'password' => $password,
			'dob' => $dob,
			'gender' => $gender,
			'about' => $about,
		]);
		return redirect('profiledetails');
	}
}
