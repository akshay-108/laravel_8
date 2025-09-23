<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ['comment_body' => 'required|string']);

        if($validator->fails()) {
            return redirect()->back()->with('status', 'Comment area is mandatory');
        }
        if(Auth::check()) {
            $post = Post::where('slug', $request->post_slug)->where('status', '0')->first();
            if($post) {
                Comment::create([
                    'post_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body
                ]);
                return redirect()->back()->with('status', 'Commented successfully');
            } else {
                return redirect()->back()->with('status', 'No such post found');
            }
        } else {
            return redirect('login')->with('status', 'Login first to comment');
        }
    }

    public function destroy(Request $request)
    {
        if(Auth::check()) {
            $comment = Comment::where('id', $request->comment_id)->where('user_id', Auth::user()->id)->first();
            
            if($comment) {
                $comment->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'Comment deleted successfully.' 
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'Something went wrong.' 
                ]);
            }
        } else {
            return response()->json([
                'status' => 401,
                'message' => 'Login to delete this comment.' 
            ]);
        }
    }
}
