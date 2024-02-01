<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view("albums.index", ['albums' => $albums]);
    }

    public function show($id)
    {
        $album = Album::find($id);
        //  $album = Album::with('artist')->find($id);
        $artist = $album->artist;
        return view('albums.show', ['album' => $album, 'artist' => $artist]);
    }
}
