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

}
