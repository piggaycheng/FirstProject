<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Frontend\UserInfo;
use Auth;
use DB;
use App\Frontend\Post;

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
        $user = DB::table('users')->where('id', $id)->first();
        $userInfo -> user_id = $id;
        $userInfo -> name = $user -> name;
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
     * Search some one and display show the specified resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        $name = $request -> input('input-searchbar');
        $userInfos = DB::table('user_infos')->where('name', $name)->get();

        return view('frontend.layouts.searchResult', compact('userInfos'));
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
        $path = public_path().'\\uploads\\'.$id;

        if(!File::exists($path)){
            File::makeDirectory($path);
            File::makeDirectory($path.'\\profile');
        }

        $date = date('YmdHis');
        if(Input::hasFile('photo')){            //'photo'是對應前端form表單中的input的name
            $file = Input::file('photo');
            $file->move('uploads\\'.$id.'\\profile', 'profile.'.$file->getClientOriginalExtension());
        }

        $userInfo = UserInfo::find($id);
        $userInfo -> img_path = 'uploads\\'.$id.'\\profile\\profile.'.$file->getClientOriginalExtension();
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
