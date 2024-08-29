<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register(Request $request){
        $field = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:admins',
            'password'=>'required|confirmed',
        ]);
        $admin = Admin::create($field);
        $token = $admin->createToken($request->name);
        return [
            'admin'=> $admin,
            'token' => $token->plainTextToken,
        ] ;

    }
    public function login(Request $request){
        $field = $request->validate([
                'email'=>'required|email|exists:admins',
                'password'=>'required',
            ]);
        $admin = Admin::where('email',$request->email)->first();
        if(!$admin||!Hash::check($request->password,$admin->password)){
            return ['message' => "The Provided  credentials are incorrect."];
        }
        $token = $admin->createToken($admin->name);

        return [
            'admin' => $admin,
            'token' => $token->plainTextToken
        ];
        
    }
    public function logout(Request $request)
    {
        $request->admin()->tokens()->delete();
        return [
            'message'=> "You are Logged out."
        ];
    }

    public function get_num_of_admins()
    {
        return ['Number of Admins '=> count(Admin::all())];
    }
    public function delete_admin(Admin $admin)
    {
        $admin->delete();
        return [ 'message'=> 'Admin Deleted Successfully' ];
    }

    public function get_users()
    {
        return User::all();
    }
    public function get_single_user(User $user)
    {
        return $user;
    }
    public function delete_user(User $user)
    {
        $user->delete();
        return [ 'message'=> 'User Deleted Successfully' ];
    }
    public function get_num_of_users()
    {
        return ['Number of Users '=> count(User::all())];
    }

    public function get_posts()
    {
        return Post::all();
    }
    public function get_num_of_posts()
    {
        return ['Number of Posts '=> count(Post::all())];
    }
    public function get_single_post(Post $post)
    {
        return $post;
    }
    public function delete_single_post(Post $post)
    {
        $post->delete();
        return [ 'message'=> 'Post Deleted Successfully' ];
    }
    
}
