<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    // Menampilkan daftar semua video tutorial dari database
    public function index()
    {
        $videos = Video::all(); 
        return view('video.index', compact('videos'));
    }

    // Menampilkan detail pemutar video berdasarkan ID
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('video.show', compact('video'));
    }
}
