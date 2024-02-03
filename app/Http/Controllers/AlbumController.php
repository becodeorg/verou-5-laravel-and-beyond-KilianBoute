<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\FavoriteAlbum;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        //    $albums = Album::all();
        $albums = Album::withCount('favorites')
            ->orderByDesc('favorites_count')
            ->get();
        return view("albums.index", ['albums' => $albums]);
    }

    public function show($id)
    {
        $album = Album::find($id);
        //  $album = Album::with('artist')->find($id);
        $artist = $album->artist;
        return view('albums.show', ['album' => $album, 'artist' => $artist]);
    }

    public function favorite($album_id)
    {
        try {
            if (FavoriteAlbum::where('album_id', $album_id)->where('user_id', auth()->user()->id)->exists()) {
                return redirect()->route('albums-index')->with('message', 'Allready added');
            }

            $favorite = new FavoriteAlbum();
            $favorite->album_id = $album_id;
            $favorite->user_id = auth()->user()->id;
            $favorite->save();

            return redirect()->route('albums-index')->with('message', 'Favorited');
        } catch (\Exception $e) {
            // Log or display the error
            dd($e->getMessage());
        }
    }

    public function destroy($album_id)
    {
        FavoriteAlbum::where("album_id", $album_id)->where('user_id', auth()->user()->id)->delete();
        return redirect()->route('albums-index')->with('message', 'Unfavorited');
    }
}
