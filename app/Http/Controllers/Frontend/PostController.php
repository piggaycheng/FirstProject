<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Frontend\Post;
// use DB;

class PostController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //
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

    public function upload(Request $request){
        $id = Auth::user()->id;
        $path = public_path().'\\uploads\\'.$id;
        $file = null;
        date_default_timezone_set("Asia/Taipei");
        
        if(!File::exists($path)){
            File::makeDirectory($path);
        }

		if(Input::hasFile('photo')){            //'photo'是對應前端form表單中的input的name
            $file = Input::file('photo');
            $file->move('uploads\\'.$id, date('YmdHis').'.'.$file->getClientOriginalExtension());
        }
        
        $content = $request->input('content');

        $post = new Post;
        $post -> content = $content;
        $post -> user_id = $id;
        $post -> img_path = 'uploads\\'.$id.'\\'.date('YmdHis').'.'.$file->getClientOriginalExtension();
        $post -> save();
        //用這個方法Insert的話create_at和update_at欄位不會自動填
        // DB::table('posts')->insert(
        //     ['content' => $content, 'user_id' => $id, 'img_path' => 'uploads\\'.$id.$file->getClientOriginalName()]
        // );

        return Redirect::to('/gallery') -> with('message', 'Post success!!');
    }
    
    public function query(){
        $id = Auth::user()->id;

        $posts = Post::paginate(12);

        return view('frontend.layouts.gallery', compact('posts'));
    }
}
