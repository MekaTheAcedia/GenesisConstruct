<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\albums;
use App\Models\producer;
use App\Models\songs;
use App\Models\user;
use App\Models\vocals;
use App\Services\PayUService\Exception;
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
		$album = albums::orderBy('releasedate', '')->paginate(24);
		$discover = albums::inRandomOrder()->paginate(12);
		return view('browse')->with([
			'album' => $album,
			'discover' => $discover,
		]);
	}

	public function contact(Request $request) {
		return view('contact');
	}

	public function radio(Request $request) {
		$songs = songs::orderBy('uploaddate', '')->paginate(24);
		$discover = songs::inRandomOrder()->paginate(12);
		return view('radio')->with([
			'songs' => $songs,
			'discover' => $discover,
		]);
	}

	public function single(Request $request) {
		return view('single');
	}

	public function search(Request $request) {
		$song = songs::where('title', 'like', '%' . $request->input('search') . '%')
			->orWhere('genre', 'like', '%' . $request->input('search') . '%')
			->orWhere('producer', 'like', '%' . $request->input('search') . '%')
			->orWhere('vocal', 'like', '%' . $request->input('search') . '%')
			->orWhere('album', 'like', '%' . $request->input('search') . '%')
			->orWhere('country', 'like', '%' . $request->input('search') . '%')->get();
		$producer = producer::where('name', 'like', '%' . $request->input('search') . '%')
			->orWhere('genre', 'like', '%' . $request->input('search') . '%')
			->orWhere('works', 'like', '%' . $request->input('search') . '%')
			->orWhere('associations', 'like', '%' . $request->input('search') . '%')
			->orWhere('discography', 'like', '%' . $request->input('search') . '%')->get();
		$user = user::where('name', 'like', '%' . $request->input('search') . '%')->get();
		$album = albums::where('title', 'like', '%' . $request->input('search') . '%')
			->orWhere('producer', 'like', '%' . $request->input('search') . '%')
			->orWhere('songs', 'like', '%' . $request->input('search') . '%')->get();

		return view('search')->with([
			'songs' => $song,
			'producer' => $producer,
			'user' => $user,
			'album' => $album,
			'search' => $request->input('search'),
		]);
	}

	public function profile(Request $request) {
		return view('profile');
	}

	public function profiledetails(Request $request) {
		return view('profiledetails');
	}

	public function updateprofile(Request $request) {
		if ((is_null($request->input('username'))) || ($request->input('username') == Auth::user()->name)) {
			$name = Auth::user()->name;
		} else {
			$name = $request->input('username');
		};
		if ((is_null($request->input('email'))) || ($request->input('email') == Auth::user()->email)) {
			$email = Auth::user()->email;
		} else {
			$email = $request->input('email');
		};
		if ((is_null($request->input('location'))) || ($request->input('location') == Auth::user()->location)) {
			$location = Auth::user()->location;
		} else {
			$location = $request->input('location');
		};
		if ((is_null($request->input('password'))) || ($request->input('password') == Auth::user()->password)) {
			$password = Auth::user()->password;
		} else {
			$password = $request->input('password');
		};
		if ((is_null($request->input('dob'))) || ($request->input('dob') == Auth::user()->dob)) {
			$dob = Auth::user()->dob;
		} else {
			$dob = $request->input('dob');
		};
		if ((is_null($request->input('gender'))) || ($request->input('gender') == Auth::user()->gender)) {
			$gender = Auth::user()->gender;
		} else {
			$gender = $request->input('gender');
		};
		if ((is_null($request->input('about'))) || ($request->input('about') == Auth::user()->about)) {
			$about = Auth::user()->about;
		} else {
			$about = $request->input('about');
		};
		if (is_null($request->avatar)) {
			$avatar = Auth::user()->avatar;
		} else {
			$avatar = 'img/' . $request->avatar->getClientOriginalName();
			$request->avatar->move('img', $avatar);
		}
		try {
			user::where('id', Auth::id())->update([
				'name' => $name,
				'email' => $email,
				'location' => $location,
				'password' => $password,
				'dob' => $dob,
				'gender' => $gender,
				'about' => $about,
				'avatar' => $avatar,
			]);
			return redirect('profiledetails');
		} catch (\Exception $e) {
			return redirect('profile')->with([
				'error' => '<div class="alert alert-danger alert-dismissable">Email is already taken</div>',
			]);
		}
	}

	public function songs(Request $request, $songid) {
		$song = songs::where('songid', $songid);
		return view('single')->with([
			'song' => $song,
		]);
	}

	public function albums(Request $request, $albumid) {
		$album = albums::where('albumid', $albumid);
		return view('single')->with([
			'album' => $album,
		]);
	}

	public function viewprofile(Request $request, $userid) {
		$user = user::where('id', $userid)->get();
		return view('viewprofile')->with([
			'user' => $user,
		]);
	}

	public function viewproducer(Request $request, $producerid) {
		$producer = producer::where('producerid', $producerid)->get();
		return view('viewproducer')->with([
			'producer' => $producer,
		]);
	}

	public function uploadsong(Request $request) {
		$producer = producer::orderBy('name')->get();
		$vocal = vocals::orderBy('name')->get();
		return view('uploadsong')->with([
			'producer' => $producer,
			'vocal' => $vocal,
		]);
	}

	public function songUploader(Request $request) {
		$title = $request->input('title');
		if (is_null($request->input('genre'))) {
			$genre = 'N/A';
		} else {
			$genre = $request->input('genre');
		}
		if (!is_null($request->input('producer'))) {
			$producername = producer::select('name')->where('producerid', $request->input('producer'))->get();
			$producerid = producer::select('producerid')->where('producerid', $request->input('producer'))->get();
		} else {
			$producername = 'N/A';
			$producerid = null;
		}
		if (is_null($request->input('vocal'))) {
			$vocalname = 'N/A';
			$vocalid = null;
		} else {
			$vocalname = vocals::select('name')->where('vocalid', $request->input('vocal'))->get();
			$vocalid = vocals::select('vocalid')->where('vocalid', $request->input('vocal'))->get();
		}
		if (is_null($request->input('country'))) {
			$country = 'N/A';
		} else {
			$country = $request->input('country');
		}
		if (is_null($request->input('description'))) {
			$description = 'N/A';
		} else {
			$description = $request->input('description');
		}

		if (is_null($request->input('lyric'))) {
			$lyric = 'N/A';
		} else {
			$lyric = $request->input('lyric');
		}
		$uploaddate = date("Y-m-d H:i:s");
		if (is_null($request->avatar)) {
			$avatar = 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg';
		} else {
			$avatar = 'img/' . $request->avatar->getClientOriginalName();
			$request->avatar->move('img', $avatar);
		}
		$songaddress = 'video/' . $request->songaddress->getClientOriginalName();
		$request->songaddress->move('video', $songaddress);
		try {
			songs::insert([
				'title' => $title,
				'genre' => $genre,
				'producer' => $producername,
				'vocal' => $vocalname,
				'country' => $country,
				'description' => $description,
				'lyric' => $lyric,
				'uploaddate' => $uploaddate,
				'avatar' => $avatar,
				'vocalid' => $vocalid,
				'producerid' => $producerid,
				'songaddress' => $songaddress,
			]);
			return redirect('profiledetails');
		} catch (\Exception $e) {
			return redirect('uploadsong')->with([
				'error' => '<div class="alert alert-danger alert-dismissable">Error</div>',
			]);
		}

	}
}
