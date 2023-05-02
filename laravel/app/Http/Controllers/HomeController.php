<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Laravel\Passport\RefreshToken;
use Laravel\Passport\Token;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    // public function logout()
    // {
    //     $user = new User;
    //     $tokens =  $user->tokens->pluck('id');
    //     Token::whereIn('id', $tokens)
    //         ->update(['revoked'=> true]);
    //     RefreshToken::whereIn('access_token_id', $tokens)->update(['revoked' => true]);
    //     return redirect('/');
    // }
    public function logout() {
        $user = new User;
        $tokens =  $user->tokens->pluck('id');
        Token::whereIn('id', $tokens)
            ->update(['revoked'=> true]);
        
        RefreshToken::whereIn('access_token_id', $tokens)->update(['revoked' => true]);
    
        // return response()->json([
    
        //     'status'    => 1,
        //     'message'   => 'User Logout',
    
        // ], 200);
        return redirect('/')->with(['status'    => 1, 'message'   => 'User Logout',]);
    }
}
