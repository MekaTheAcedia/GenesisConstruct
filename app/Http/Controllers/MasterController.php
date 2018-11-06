<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\albums;
use App\Models\favorite;
use App\Models\producer;
use App\Models\songs;
use App\Models\user;
use App\Services\PayUService\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterController extends Controller {
	public function indexSongs(Request $request) {
		$newsongs = songs::orderBy('songid', '')->paginate(8);
		$discover = songs::inRandomOrder()->paginate(8);
		$newalbums = albums::orderBy('albumid', '')->paginate(7);

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
			->orWhere('associations', 'like', '%' . $request->input('search') . '%')->get();
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
		} catch (Exception $e) {
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
		$works = songs::orderBy('songid', '')->where('producerid', $producerid)->get();
		$discography = albums::orderBy('albumid', '')->where('producerid', $producerid)->get();

		return view('viewproducer')->with([
			'producer' => $producer,
			'works' => $works,
			'discography' => $discography,
		]);
	}

	public function uploadsong(Request $request) {
		$producer = producer::orderBy('name')->get();
		$album = albums::orderBy('title')->get();
		return view('uploadsong')->with([
			'producer' => $producer,
			'album' => $album,
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
		} else {
			$vocalname = $request->input('vocal');
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
		if (is_null($request->input('album'))) {
			$albumtitle = 'N/A';
			$albumid = null;
		} else {
			$albumtitle = albums::select('title')->where('albumid', $request->input('album'))->get();
			$albumid = albums::select('albumid')->where('albumid', $request->input('album'))->get();
		}
		$songaddress = 'video/' . $request->songaddress->getClientOriginalName();
		$request->songaddress->move('video', $songaddress);
		try {
			songs::insert([
				'title' => $title,
				'genre' => $genre,
				'producer' => $producername[0]->name,
				'vocal' => $vocalname,
				'album' => $albumtitle[0]->title,
				'country' => $country,
				'description' => $description,
				'lyric' => $lyric,
				'uploaddate' => $uploaddate,
				'avatar' => $avatar,
				'producerid' => $producerid[0]->producerid,
				'albumid' => $albumid[0]->albumid,
				'songaddress' => $songaddress,
				'userid' => Auth::id(),
			]);
			return redirect('profiledetails');
		} catch (Exception $e) {
			return redirect('uploadsong')->with([
				'error' => '<div class="alert alert-danger alert-dismissable">Error</div>',
			]);
		}
	}

	public function addproducer(Request $request) {
		return view('addproducer');
	}

	public function produceruploader(Request $request) {
		$name = $request->input('name');
		if (is_null($request->input('about'))) {
			$about = 'N/A';
		} else {
			$about = $request->input('about');
		}
		if (is_null($request->input('sites'))) {
			$sites = 'N/A';
		} else {
			$sites = '<a href="' . $request->input('sites') . '">' . $request->input('sites') . '</a><br>';
		}
		if (is_null($request->input('associations'))) {
			$associations = 'N/A';
		} else {
			$associations = $request->input('associations');
		}
		if (is_null($request->input('genre'))) {
			$genre = 'N/A';
		} else {
			$genre = $request->input('genre');
		}
		if (is_null($request->input('status'))) {
			$status = 'N/A';
		} else {
			$status = $request->input('status');
		}
		if (is_null($request->input('dob'))) {
			$dob = null;
		} else {
			$dob = $request->input('dob');
		}
		if (is_null($request->input('gender'))) {
			$gender = 'N/A';
		} else {
			$gender = $request->input('gender');
		}
		if (is_null($request->avatar)) {
			$avatar = 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png';
		} else {
			$avatar = 'img/' . $request->avatar->getClientOriginalName();
			$request->avatar->move('img', $avatar);
		}
		try {
			producer::insert([
				'name' => $name,
				'gender' => $gender,
				'dob' => $dob,
				'status' => $status,
				'genre' => $genre,
				'associations' => $associations,
				'sites' => $sites,
				'about' => $about,
				'avatar' => $avatar,
			]);
			return redirect('profiledetails');
		} catch (Exception $e) {
			return redirect('addproducer')->with([
				'error' => '<div class="alert alert-danger alert-dismissable">Error</div>',
			]);
		}
	}

	public function favorite(Request $request) {
		$favorite = songs::join('favorite', 'songs.songid', '=', 'favorite.songid')
			->select('songs.*', 'favorite.userid')
			->where('favorite.userid', Auth::id())
			->get();
		return view('favorite')->with([
			'favorite' => $favorite,
		]);
	}

	public function createalbum(Request $request) {
		$producer = producer::orderBy('name')->get();
		return view('createalbum')->with([
			'producer' => $producer,
		]);
	}

	public function albumuploader(Request $request) {
		if (is_null($request->thumbnail)) {
			$thumbnail = 'https://png.pngtree.com/element_origin_min_pic/17/04/19/f0657f5b68eb9d3c6e0076fbd897322a.jpg';
		} else {
			$thumbnail = 'img/' . $request->thumbnail->getClientOriginalName();
			$request->thumbnail->move('img', $thumbnail);
		}
		if (is_null($request->input('description'))) {
			$description = 'N/A';
		} else {
			$description = $request->input('description');
		}
		$producername = producer::select('name')->where('producerid', $request->input('producer'))->get();
		$producerid = producer::select('producerid')->where('producerid', $request->input('producer'))->get();
		$releasedate = date("Y-m-d H:i:s");
		try {
			albums::insert([
				'title' => $request->input('title'),
				'label' => $request->input('label'),
				'price' => $request->input('price'),
				'producer' => $producername[0]->name,
				'thumbnail' => $thumbnail,
				'description' => $description,
				'producerid' => $producerid[0]->producerid,
				'releasedate' => $releasedate,
			]);
			return redirect('uploadsong');
		} catch (Exception $e) {
			return redirect('createalbum')->with([
				'error' => '<div class="alert alert-danger alert-dismissable">Error</div>',
			]);
		}
	}
}
