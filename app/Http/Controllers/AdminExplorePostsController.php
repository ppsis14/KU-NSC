<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Post;
use App\User;
use App\Category;

class AdminExplorePostsController extends Controller
{
    public function index() {

        if(Gate::allows('isAdmin')){
            $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.username')
            ->orderBy('created_at', 'desc')->paginate(10);

            $categories = Category::select('name')->get();
            $categories_name = array();
            foreach ($categories as $c) {
                array_push($categories_name, $c->name);
            }
            $dropdown = 'All';
            
            return view('layouts.admin.explore', ['categories_name' => $categories_name, 'dropdown' => $dropdown])->withDetails($posts);
        }
        else {
            return abort(403, 'Unauthorized action.');
        }
    }

    public function search(Request $request, $dropdown) 
    {
        if(Gate::allows('isAdmin')){
            $key = $request->input('key');
            $categories = Category::select('name')->get();
            $categories_name = array();
            foreach ($categories as $c) {
                array_push($categories_name, $c->name);
            }

            if($dropdown == 'All') {
                $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
                ->select('posts.*', 'users.username')->where(function ($query) use ($key) {
                    $query->withAnyTag($key)
                    ->orWhere('post_title', 'LIKE', '%'. $key . '%');
                })->orderBy('created_at', 'desc')->paginate(10)->appends(['key' => $request->input('key'), 'dropdown' => $dropdown]);
            }
            else {
                $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
                ->select('posts.*', 'users.username')->where('category', $dropdown)
                ->where(function ($query) use ($key) {
                    $query->withAnyTag($key)
                    ->orWhere('post_title', 'LIKE', '%'. $key . '%');
                })->orderBy('created_at', 'desc')->paginate(10)->appends(['key' => $request->input('key'), 'dropdown' => $dropdown]);
            }


            if(count($posts) > 0)
                return view('layouts.admin.explore', ['categories_name' => $categories_name, 'dropdown' => $dropdown])->withQuery($key)->withDetails($posts);
            
            return view('layouts.admin.explore', ['categories_name' => $categories_name, 'dropdown' => $dropdown])->withMessage('No posts found')->withQuery($key);
        }
        else {
            return abort(403, 'Unauthorized action.');
        }
    }

    public function advance(Request $request) 
    {
        if(Gate::allows('isAdmin')){
            $title = $request->input('post_title');
            $category = $request->input('category');

            $key_title = '';
            $key_category = 'Category: ' . $category;
            $key_tags = '';

            if( $request->input('post_title') != null) {
                $key_title = 'Title: ' . $request->input('post_title');
                $key_category = ', Category: ' . $category;
            }

            if($request->input('tags') == null) {
                $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
                ->select('posts.*', 'users.username')->where('category', $category)
                ->where('post_title', 'LIKE', '%'. $title . '%')
                ->orderBy('created_at', 'desc')->paginate(10)->appends(['post_title' => $request->input('post_title'), 'category' => $request->input('category'),
                'tags' => $request->input('tags')]);
            }
            else {
                $tags = explode(",", $request->tags);
                $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
                ->select('posts.*', 'users.username')->where('category', $category)
                ->where('post_title', 'LIKE', '%'. $title . '%')
                ->withAnyTag($tags)
                ->orderBy('created_at', 'desc')->paginate(10)->appends(['post_title' => $request->input('post_title'), 'category' => $request->input('category'),
                'tags' => $request->input('tags')]);
                
                $key_tags = ', Tags: ' . $request->input('tags');
            }

            $categories = Category::select('name')->get();
            $categories_name = array();
            foreach ($categories as $c) {
                array_push($categories_name, $c->name);
            }
            $dropdown = $category;

            $q = $key_title . $key_category . $key_tags;

            if(count($posts) > 0)
                return view('layouts.admin.explore', ['categories_name' => $categories_name, 'dropdown' => $dropdown])->withQuery($q)->withDetails($posts);
            
            return view('layouts.admin.explore', ['categories_name' => $categories_name, 'dropdown' => $dropdown])->withMessage('No posts found')->withQuery($q);
        }
        else {
            return abort(403, 'Unauthorized action.');
        }
    }

    public function choose_category($category) 
    {
        if(Gate::allows('isAdmin')){
            $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.username')
            ->orderBy('created_at', 'desc')->paginate(10);
            $categories = Category::select('name')->get();
            $categories_name = array();
            foreach ($categories as $c) {
                array_push($categories_name, $c->name);
            }
            $dropdown = $category;

            return view('layouts.admin.explore', ['categories_name' => $categories_name, 'dropdown' => $dropdown])->withDetails($posts);
        }
        else {
            return abort(403, 'Unauthorized action.');
        }
    }

    public function tag($tag) 
    {
        if(Gate::allows('isAdmin')){
            $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
            ->select('posts.*', 'users.username')->withAnyTag($tag)->orderBy('created_at', 'desc')->paginate(10);
            $categories = Category::select('name')->get();
            $categories_name = array();
            foreach ($categories as $c) {
                array_push($categories_name, $c->name);
            }

            return view('layouts.admin.tag', ['categories_name' => $categories_name, 'tag' => $tag])->withDetails($posts);
        }
        else {
            return abort(403, 'Unauthorized action.');
        }
    }

    public function all_tag() 
    {
        if(Gate::allows('isAdmin')){
            $tags = Post::existingTags();
            $categories = Category::select('name')->get();
            $categories_name = array();
            foreach ($categories as $c) {
                array_push($categories_name, $c->name);
            }

            return view('layouts.admin.all-tags', ['categories_name' => $categories_name,'tags' => $tags]);
        }
        else {
            return abort(403, 'Unauthorized action.');
        }
    }
    
    public function __construct()
    {
      $this->middleware('auth');
    }
}
