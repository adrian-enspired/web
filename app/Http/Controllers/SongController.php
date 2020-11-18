<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Song;

class SongController extends Controller
{
    /**
     * Image Upload Code
     *
     * @return void
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $ext = $file->extension();
        $original_filename = $file->getClientOriginalName();
        $new_filename = Str::uuid() . ".{$ext}";

        $song = Song::create([
          'file' => $new_filename,
          'original_filename' => $original_filename
        ]);

        $file->move(Storage::disk('songs')->path('/'), $new_filename);

        return response()->json(['song'=>$song]);
    }

}
