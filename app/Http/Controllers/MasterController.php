<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\albums;
use App\Models\comments;
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
		$newalbums = albums::whereNotIn('albumid', [0])->orderBy('albumid', '')->paginate(7);

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
		$album = albums::whereNotIn('albumid', [0])->orderBy('releasedate', '')->paginate(18);
		$discover = albums::whereNotIn('albumid', [0])->inRandomOrder()->paginate(12);
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

	public function search(Request $request) {
		$song = songs::join('producer', 'producer.producerid', '=', 'songs.producerid')
			->select('songs.*', 'producer.name')
			->where('songs.title', 'like', '%' . $request->input('search') . '%')
			->orWhere('songs.genre', 'like', '%' . $request->input('search') . '%')
			->orWhere('songs.vocal', 'like', '%' . $request->input('search') . '%')
			->orWhere('songs.country', 'like', '%' . $request->input('search') . '%')
			->inRandomOrder()
			->get();
		$producer = producer::where('name', 'like', '%' . $request->input('search') . '%')
			->whereNotIn('producerid', [0])
			->orWhere('genre', 'like', '%' . $request->input('search') . '%')
			->whereNotIn('producerid', [0])
			->orWhere('associations', 'like', '%' . $request->input('search') . '%')
			->whereNotIn('producerid', [0])
			->inRandomOrder()
			->get();
		$user = user::where('name', 'like', '%' . $request->input('search') . '%')
			->whereNotIn('id', [0])
			->inRandomOrder()
			->get();
		$album = albums::join('producer', 'producer.producerid', '=', 'albums.producerid')
			->select('albums.*', 'producer.name')
			->where('albums.title', 'like', '%' . $request->input('search') . '%')
			->whereNotIn('albumid', [0])
			->inRandomOrder()
			->get();
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
		try {
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
		} catch (Exception $e) {
			return redirect('profile')->with([
				'error' => '<div class="alert alert-danger alert-dismissable">Email is already taken</div>',
			]);
		}
	}

	public function update_avatar(Request $request) {
		user::where('id', Auth::id())->update([
			'avatar' => $request->avatar,
		]);
	}

	public function songs(Request $request, $songid) {
		$song = songs::where('songid', $songid)->get();
		$producerid = $song[0]->producerid;
		$producer = producer::where('producerid', $producerid)->get();
		$userid = $song[0]->userid;
		$user = user::where('id', $userid)->get();
		$albumid = $song[0]->albumid;
		$album = albums::where('albumid', $albumid)->get();
		$newsongs = songs::join('producer', 'producer.producerid', '=', 'songs.producerid')
			->select('songs.*', 'producer.name')
			->orderBy('songid', '')
			->paginate(3);
		$discover = songs::join('producer', 'producer.producerid', '=', 'songs.producerid')
			->select('songs.*', 'producer.name')
			->inRandomOrder()
			->paginate(3);
		$comments = user::join('comments', 'comments.userid', '=', 'users.id')
			->select('users.*', 'comments.message', 'comments.uploadtime')
			->where('comments.songid', $songid)
			->orderBy('commentid', '')
			->get();
		if ($albumid != 0) {
			$nextsong = songs::orderBy('songid')->where('songid', '>', $songid)->where('albumid', $albumid)->paginate(1);
			$prevsong = songs::orderBy('songid', '')->where('songid', '<', $songid)->where('albumid', $albumid)->paginate(1);
			if (count($nextsong) == 0) {
				$nextproducerid = 0;
			} else {
				$nextproducerid = $nextsong[0]->producerid;
			}
			if (count($prevsong) == 0) {
				$prevproducerid = 0;
			} else {
				$prevproducerid = $prevsong[0]->producerid;
			}
			$nextproducer = producer::where('producerid', $nextproducerid)->get();
			$prevproducer = producer::where('producerid', $prevproducerid)->get();
		} else {
			$nextsong = songs::where('songid', $songid + 1)->get();
			$prevsong = songs::where('songid', $songid - 1)->get();
			if (count($nextsong) == 0) {
				$nextproducerid = 0;
			} else {
				$nextproducerid = $nextsong[0]->producerid;
			}
			if (count($prevsong) == 0) {
				$prevproducerid = 0;
			} else {
				$prevproducerid = $prevsong[0]->producerid;
			}
			$nextproducer = producer::where('producerid', $nextproducerid)->get();
			$prevproducer = producer::where('producerid', $prevproducerid)->get();
		}
		return view('player')->with([
			'song' => $song,
			'producer' => $producer,
			'user' => $user,
			'album' => $album,
			'nextsong' => $nextsong,
			'prevsong' => $prevsong,
			'nextproducer' => $nextproducer,
			'prevproducer' => $prevproducer,
			'newsongs' => $newsongs,
			'discover' => $discover,
			'comments' => $comments,
		]);
	}

	public function albums(Request $request, $albumid) {
		if ($albumid == 0) {
			return view('error');
		} else {
			$album = albums::where('albumid', $albumid)->get();
			$songs = songs::join('producer', 'producer.producerid', '=', 'songs.producerid')
				->select('songs.*', 'producer.name')
				->where('albumid', $albumid)
				->orderBy('songid')
				->simplePaginate(5);
			$producerid = $album[0]->producerid;
			$producer = producer::where('producerid', $producerid)->get();
			return view('album')->with([
				'album' => $album,
				'songs' => $songs,
				'producer' => $producer,
			]);
		}
	}

	public function viewprofile(Request $request, $userid) {
		$user = user::where('id', $userid)->get();
		return view('viewprofile')->with([
			'user' => $user,
		]);
	}

	public function viewproducer(Request $request, $producerid) {
		if ($producerid == 0) {
			return view('error');
		} else {
			$producer = producer::where('producerid', $producerid)->get();
			$works = songs::orderBy('songid', '')->where('producerid', $producerid)->get();
			$discography = albums::orderBy('albumid', '')->where('producerid', $producerid)->get();

			return view('viewproducer')->with([
				'producer' => $producer,
				'works' => $works,
				'discography' => $discography,
			]);
		}
	}

	public function uploadsong(Request $request) {
		$producer = producer::whereNotIn('producerid', [0])->orderBy('name')->get();
		$album = albums::whereNotIn('albumid', [0])->orderBy('title')->get();
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
			$producerid = producer::select('producerid')->where('producerid', $request->input('producer'))->get();
			$id = $producerid[0]->producerid;
		} else {
			$name = 'N/A';
			$id = 0;
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
			$description = '<p>N/A</p>';
		} else {
			$description = $request->input('description');
		}
		if (is_null($request->input('lyric'))) {
			$lyric = '<p>N/A</p>';
		} else {
			$lyric = $request->input('lyric');
		}
		$uploaddate = date("Y-m-d H:i:s");
		if (is_null($request->avatar)) {
			$avatar = 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg';
		} else {
			$avatar = $request->avatar;
		}
		if (is_null($request->input('album'))) {
			$albid = 0;
		} else {
			$albumid = albums::select('albumid')->where('albumid', $request->input('album'))->get();
			$albid = $albumid[0]->albumid;
		}
		$songaddress = 'video/' . $request->songaddress->getClientOriginalName();
		$request->songaddress->move('video', $songaddress);
		try {
			songs::insert([
				'title' => $title,
				'genre' => $genre,
				'vocal' => $vocalname,
				'country' => $country,
				'description' => $description,
				'lyric' => $lyric,
				'uploaddate' => $uploaddate,
				'avatar' => $avatar,
				'producerid' => $id,
				'albumid' => $albid,
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
			$about = '<p>N/A</p>';
		} else {
			$about = $request->input('about');
		}
		if (is_null($request->input('sites'))) {
			$sites = 'N/A';
		} else {
			$sites = $request->input('sites');
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
			$avatar = $request->avatar;
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
				'userid' => Auth::id(),
			]);
			return redirect('uploadsong');
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
		$producer = producer::whereNotIn('producerid', [0])->orderBy('name')->get();
		return view('createalbum')->with([
			'producer' => $producer,
		]);
	}

	public function albumuploader(Request $request) {
		if (is_null($request->thumbnail)) {
			$thumbnail = 'https://png.pngtree.com/element_origin_min_pic/16/08/08/0957a7e677c6791.jpg';
		} else {
			$thumbnail = $request->thumbnail;
		}
		if (is_null($request->input('description'))) {
			$description = '<p>N/A</p>';
		} else {
			$description = $request->input('description');
		}
		$producerid = producer::select('producerid')->where('producerid', $request->input('producer'))->get();
		$id = $producerid[0]->producerid;
		$releasedate = date("Y-m-d H:i:s");
		try {
			albums::insert([
				'title' => $request->input('title'),
				'label' => $request->input('label'),
				'price' => $request->input('price'),
				'thumbnail' => $thumbnail,
				'description' => $description,
				'producerid' => $id,
				'releasedate' => $releasedate,
				'userid' => Auth::id(),
			]);
			return redirect('uploadsong');
		} catch (Exception $e) {
			return redirect('createalbum')->with([
				'error' => '<div class="alert alert-danger alert-dismissable">Error</div>',
			]);
		}
	}

	public function comment(Request $request) {
		$message = $request->message;
		$userid = Auth::id();
		$songid = $request->songid;
		$uploadtime = date("Y-m-d H:i:s");
		$comment = comments::insert([
			'userid' => $userid,
			'songid' => $songid,
			'message' => $message,
			'uploadtime' => $uploadtime,
		]);
	}
}
