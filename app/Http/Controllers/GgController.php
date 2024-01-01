<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  Socialite::driver('google')->redirect();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createGg()
    {
        $ggUser = Socialite::driver('google')->user();
        $user = User::where('email', $ggUser->email)->first();
        if ($user) {
            Auth::login($user);
            return redirect('/home');
        } else {
            // Nếu người dùng chưa tồn tại, tạo mới
            $user = User::create([
                'id' => $ggUser->id,
                'name' => $ggUser->name,
                'email' => $ggUser->email,
                'gauth_id' => $ggUser->id,
                'gauth_type' => 'google',
                'password' => bcrypt(Str::random(12))
            ]);
        }
        Auth::login($user);
        return redirect('/home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
