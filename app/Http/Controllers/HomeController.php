<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Campaign;
use App\Character;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function displayHome() {
      if (!Auth::check()) {
        return view('login');
      }

      $user = Auth::user();
      $username = $user->name;
      $campaigns = $user->campaigns;
      $characters = $user->characters;
      /*
      $posts =
      */
      return view('homepage', compact('user', 'username',
        'campaigns', 'characters'));
    }

    // Displays the character information page
    public function characterHome(Request $request, $id) {
      $character = Character::find($id);
      return view('character', compact('request', 'id', 'character'));
    }

    // Displays the campaign timeline page
    public function campaignHome(Request $request, $id) {
      $campaign = Campaign::find($id);
      //$posts = $campaign->posts;
      $posts = Post::where('campaign_id', $id)->orderBy('created_at', 'desc')->get();
      $user = Auth::user();

      return view('campaign', compact('campaign', 'id', 'posts', 'user'));
    }

    public function addCharacter(Request $request) {
      $char = new Character;
      $char->name = $request->name;
      $char->race = $request->race;
      $char->class = $request->class;
      $char->background = $request->background;
      $char->alignment = $request->alignment;
      $char->str = $request->str;
      $char->dex = $request->dex;
      $char->con = $request->con;
      $char->int = $request->int;
      $char->wis = $request->wis;
      $char->cha = $request->cha;
      $char->level = $request->level;
      $char->hit_points = $request->hp;
      $char->armor_class = $request->ac;
      $char->speed = $request->speed;
      $char->user_id = Auth::user()->id;

      if ($char->save()) {
				$addStatus = 'New character successfully added';
			} else {
				$addStatus = 'Error adding character';
			}

      return redirect('/');
    }

    public function addPost(Request $request) {
      // add the post
      $post = new Post;

      $post->title = $request->title;
      $post->content = $request->content;
      $post->campaign_id = $request->campaign_id;
      $post->user_id = Auth::user()->id;

      if ($post->save()) {
				$addStatus = 'New sensor successfully added';
			} else {
				$addStatus = 'Error adding sensor';
			}
      return redirect("/campaigns/$request->campaign_id");
    }

    public function deletePost(Request $request) {
      Post::destroy($request->id);
      return redirect("/campaigns/$request->campaign_id");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


}
