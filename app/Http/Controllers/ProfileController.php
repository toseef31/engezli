<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Categories;
use App\Models\User;
use App\Models\Services;
use App\Facade\Engezli;
use Hash;
use Session;
use Mail;
use Redirect;
use App;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id; 
        $user = User::where('id', $user_id)->first();
        $userServices = Services::where('seller_id', $user_id)->with('sellerInfo','packageInfo')->paginate(16);
        $serviceCount = $userServices->count();
        
        return \View::make('frontend.profile')->with(compact('user','userServices','serviceCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('frontend.edit-profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::whereusername($username)->first();
        $userServices = Services::where('seller_id', $user->id)->with('sellerInfo','packageInfo')->paginate(16);
        $serviceCount = $userServices->count();
        // dd($userServices);
        return \View::make('frontend.user')->with(compact('user','userServices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}