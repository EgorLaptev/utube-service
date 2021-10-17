<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentDislike;
use App\Models\CommentLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function upload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'content'  => 'required|string|min:1|max:999',
            'video_id' => 'required|integer'
        ]);

        if (!$validator->fails()) {

            $comment = Comment::create([
                'user_id'   => Auth::id(),
                'video_id'  => $request->post('video_id'),
                'content'   => $request->post('content')
            ]);

            if ($comment) {
                return response()->json([
                    'username'  => $comment->user['username'],
                    'user_link' => route('user', ['id' => $comment->user['id']]),
                    'content'   => $comment['content'],
                    'avatar'    => asset('storage/app') . '/' . $comment->user['avatar'],
                    'created_at' => date_format($comment['created_at'], 'M j, Y')
                ]);
            }

        }

        return $validator->errors();

    }

    public function like(Request $request)
    {

        if (CommentLike::where([
            ['user_id', Auth::id()],
            ['comment_id', $request->get('id')]
        ])->exists()) {
            CommentLike::where([
                ['user_id', Auth::id()],
                ['comment_id', $request->get('id')]
            ])->delete();
        } else {

            CommentLike::create([
                'user_id' => Auth::id(),
                'comment_id' => $request->get('id')
            ]);

            CommentDislike::where([
                ['user_id', Auth::id()],
                ['comment_id', $request->get('id')]
            ])->delete();

        }

        return [
            CommentLike::where('comment_id', $request->get('id'))->count(),
            CommentDislike::where('comment_id', $request->get('id'))->count()
        ];

    }

    public function dislike(Request $request)
    {

        if (CommentDislike::where([
            ['user_id', Auth::id()],
            ['comment_id', $request->get('id')]
        ])->exists()) {
            CommentDislike::where([
                ['user_id', Auth::id()],
                ['comment_id', $request->get('id')]
            ])->delete();
        } else {

            CommentDislike::create([
                'user_id' => Auth::id(),
                'comment_id' => $request->get('id')
            ]);

            CommentLike::where([
                ['user_id', Auth::id()],
                ['comment_id', $request->get('id')]
            ])->delete();

        }

        return [
            CommentLike::where('comment_id', $request->get('id'))->count(),
            CommentDislike::where('comment_id', $request->get('id'))->count()
        ];
    }

}
