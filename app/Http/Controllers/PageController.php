<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Dislike;
use App\Models\Like;
use App\Models\Subscribe;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{

    public function home(Request $request)
    {

        $videos = ($request->get('search')) ?
                    Video::where('title', 'LIKE', '%'.$request->get('search').'%')->where('private', 0)->get() :
                    Video::where('private', 0)->get();

        return view('pages.home', [
            'videos' => $videos,
            'user'   => Auth::user()
        ]);

    }

    public function watch(Request $request)
    {

        $video_code = $request->get('v');
        $video = Video::where('code', $video_code)->first();

        if ($video['private'] && $video['author_id'] !== Auth::id()) return response(null, 403);

        return view('pages.watch', [
            'video' => $video,
            'recommendations' => Video::limit(6)->where('id', '!=', $video['id'])->where('private', 0)->get(),
            'comments' => Comment::where('video_id', $video['id'])->get(),
            'subscriber' => Subscribe::where([['user_id', Auth::id()],['channel_id', $video->author['id']]])->exists(),
            'liked' => Like::where([['user_id', Auth::id()], ['video_id', $video['id']]])->exists(),
            'disliked' => Dislike::where([['user_id', Auth::id()], ['video_id', $video['id']]])->exists()
        ]);
    }

    public function user(Request $request)
    {
        $user = ($request->get('id')) ? User::find($request->get('id')) : User::find(Auth::id());
        return view('pages.user', [
            'user' => $user,
            'subscriber' => Subscribe::where([['user_id', Auth::id()],['channel_id', $user['id']]])->exists()
        ]);
    }

    public function videos(Request $request)
    {
        $user_videos = Video::where('author_id', Auth::id())->get();

        return view('pages.videos', [
            'videos' => $user_videos
        ]);
    }

    public function history(Request $request)
    {

        $videos = [];

        $history_cookie = $request->cookie('history') ? json_decode($request->cookie('history')) : [];

        foreach ($history_cookie as $code) {
            $videos[] = Video::where('code', $code)->first();
        }

        return view('pages.history', [
            'videos' => $videos
        ]);

    }

    public function likes(Request $request)
    {

        $videos_id = Like::where('user_id', Auth::id())->pluck('video_id')->toarray();
        $videos = Video::whereIn('id', $videos_id)->get();

        return view('pages.likes', [
            'videos' => $videos
        ]);

    }

    public function subscribes(Request $request)
    {

        $channels_id = Subscribe::where('user_id', Auth::id())->pluck('channel_id')->toarray();
        $channels = User::whereIn('id', $channels_id)->get();

        return view('pages.subscribes', [
            'channels' => $channels
        ]);

    }

    public function upload(Request $request)
    {
        return view('pages.upload');
    }

    public function settings()
    {
        return view('pages.settings');
    }

    public function sign_up()
    {
    return view('pages.sign-up');
    }

    public function sign_in()
    {
        return view('pages.sign-in');
    }

}
