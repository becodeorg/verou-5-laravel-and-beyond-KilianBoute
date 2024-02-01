<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view("artists.index", ['artists' => $artists]);
    }

    public function show($id)
    {
        $artist = Artist::find($id);
        $albums = $artist->albums()->get();
        return view('artists.show', ['artist' => $artist, 'albums' => $albums]);
    }
}
