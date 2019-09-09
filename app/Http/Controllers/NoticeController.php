<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Info;
use App\notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $info = Group::all();

        //print_r($info);
        return view('notice.index',compact('info'));
        //return view('info.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['users'] = group::all();
        return view('notice.create', $data);
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
        $member=$request->input('GroupID');
        foreach($member as $value){
            $storeInfo = new notice();
            $storeInfo->GroupID = $value;
            $storeInfo->Notice = $request->input('Notice');
            $storeInfo->save();
        }
    
            return redirect('/notice');
            
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
        $post = notice:: findOrFail($id);
        return view('notice.edit',compact('post'));
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
        $updateInfo = Group::findOrFail($id);
        $updateInfo->GroupID = $request->input('GroupID');
        $updateInfo->Deadline = $request->input('Notice');


        $updateInfo->save();
        return redirect('/group');

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
        $post = notice::find($id);
        $post->delete();
        return redirect('/notice');

        
    }
}
