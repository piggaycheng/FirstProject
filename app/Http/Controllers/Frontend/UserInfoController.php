<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use App\Frontend\UserInfo;
use Auth;
use DB;

class UserInfoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        date_default_timezone_set("Asia/Taipei");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $id = Auth::user()->id;
        $userInfo = new UserInfo;
        $userInfo -> user_id = $id;
        $userInfo -> save();

        return Redirect::to('/home');
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
     * @param  \App\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $id = Auth::user()->id;
        $userInfo = DB::table('user_infos')->where('id', $id)->first();
        // echo $userInfo;
        return view('frontend.layouts.profile', compact('userInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(UserInfo $userInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::user()->id;

        $userInfo = UserInfo::find($id);
        $userInfo -> career = $request -> input('profile-career');
        $userInfo -> birthday = $request -> input('profile-born');
        $userInfo -> cellphone = $request -> input('profile-cellphone');
        $userInfo -> save();

        return response()->json($userInfo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserInfo $userInfo)
    {
        //
    }
}
