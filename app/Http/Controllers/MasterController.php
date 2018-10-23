<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\songs;
use Illuminate\Http\Request;

class MasterController extends Controller {
	public function indexSongs(Request $request) {
		$songs = songs::orderBy('uploaddate', '')->paginate(8);

		return view('index')->with([
			'songs' => $songs,
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
}
