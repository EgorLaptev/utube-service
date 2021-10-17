<?php

namespace App\Http\Controllers;

use App\Models\Dislike;
use App\Models\Like;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{

    public function upload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'video'         => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'preview'       => 'required|image|mimes:jpg,png,bmp',
            'title'         => 'required|string|max:70',
            'description'   => 'string|max:1000|nullable',
            'private'       => 'boolean'
        ]);

        if (!$validator->fails()) {

            $video   =  $request->file('video');
            $preview =  $request->file('preview');

            $video_path   = $video->store('videos');
            $preview_path = $preview->store('previews');

            Video::create([
                'author_id'         => Auth::id(),
                'path'              => $video_path,
                'code'              => explode('.', $video->hashName())[0],
                'preview_path'      => $preview_path,
                'title'             => $request->post('title'),
                'description'       => $request->post('description'),
                'disabled_comments' => $request->post('disabled_comments'),
                'private'           => $request->post('private'),
            ]);

            return redirect()->back();

        }

        return redirect()->back()->withErrors($validator)->withInput();

    }

    public function like(Request $request)
    {

        if (Like::where([
            ['user_id', Auth::id()],
            ['video_id', $request->get('id')]
        ])->exists()) {
            Like::where([
                ['user_id', Auth::id()],
                ['video_id', $request->get('id')]
            ])->delete();
        } else {

            Like::create([
                'user_id' => Auth::id(),
                'video_id' => $request->get('id')
            ]);

            Dislike::where([
                ['user_id', Auth::id()],
                ['video_id', $request->get('id')]
            ])->delete();

        }

        return [
            Like::where('video_id', $request->get('id'))->count(),
            Dislike::where('video_id', $request->get('id'))->count()
        ];

    }

    public function dislike(Request $request)
    {

        if (Dislike::where([
            ['user_id', Auth::id()],
            ['video_id', $request->get('id')]
        ])->exists()) {
            Dislike::where([
                ['user_id', Auth::id()],
                ['video_id', $request->get('id')]
            ])->delete();
        } else {

            Dislike::create([
                'user_id' => Auth::id(),
                'video_id' => $request->get('id')
            ]);

            Like::where([
                ['user_id', Auth::id()],
                ['video_id', $request->get('id')]
            ])->delete();

        }

        return [
            Like::where('video_id', $request->get('id'))->count(),
            Dislike::where('video_id', $request->get('id'))->count()
        ];
    }

}
