<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;

class FrontendController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        $categories = Category::where('status', '0')->get();
        $latestPosts = Post::where('status', '0')->orderBy('created_at', 'DESC')->get();
        return view('frontend.index', compact('categories', 'latestPosts', 'setting'));
    }

    public function viewCategoryPost($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->where('status','0')->first();
        if($category)
        {
            $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(10);
            return view('frontend.post.index', compact('post', 'category'));
        } else {
            return redirect('/');
        }
    }

    public function viewPost(string $categorySlug, string $postSlug)
    {
        $category = Category::where('slug', $categorySlug)->where('status','0')->first();
        if($category)
        {
            $post = Post::where('category_id', $category->id)->where('slug', $postSlug)->where('status', '0')->first();
            $latestPost = Post::where('category_id', $category->id)->where('status', '0')->orderBy('created_at', 'DESC')->get()->take(15);
            return view('frontend.post.view', compact('post','latestPost'));
        } else {
            return redirect('/');
        }
    }
}
