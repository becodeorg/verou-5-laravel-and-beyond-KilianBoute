@extends('layout')

@section('title')
    albums - index
@endsection

@section('content')
    <h2>Albums</h2>
    <ul>
        @foreach ($albums as $album)
            <li>
                <h3><a href="{{ route('albums-show', ['id' => $album->id]) }}">{{ $album->name }}</a></h3>
                <h4><a href="{{ route('artists-show', ['id' => $album->artist->id]) }}">By: {{ $album->artist->name }}</a>
                </h4>
                <p>*{{ $album->favorite_count() }}*
                <form method="post" action="{{ route('favorites-add', ['album_id' => $album->id]) }}" style="display:inline;">
                    @csrf
                    <button type="submit">+</button>
                </form>

                <form method="post" action="{{ route('favorites-destroy', ['album_id' => $album->id]) }}"
                    style="display:inline;">
                    @csrf
                    @method('delete')
                    <button type="submit">-</button>
                </form>
                @if (!empty($message))
                    <p>{{ $message }}</p>
                @endif
                {{-- <img src="{{ $album->image }}"> --}}
                <hr>
            </li>
        @endforeach
    </ul>
@endsection
