<?php

namespace App\Http\Controllers;

use Session;
use App\contacts;
use App\messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msg = Messages::orderBy('id','desc')->get();
        $msgbar = Messages::orderBy('id','desc')->get()->take(3);

        return view('admin.home.showMessage',compact('msg','msgbar'));
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
        $msg = new Messages;

        $msg->name = $request->name;
        $msg->email = $request->email;
        $msg->mobile = $request->number;
        $msg->message = $request->message;

        $msg->save();

        Session::flash('success','You are succesfully sent the message');

        return redirect()->back();
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
        $msg = Messages::find($id);

        $msg->delete();

        Session::flash('success','You are read the message.');

        return redirect()->back();
    }
    public function trashed()
    {
        $msg = Messages::onlyTrashed()->get();
        $msgbar = Messages::orderBy('id','desc')->get()->take(3);
        return view('admin.home.readMessage',compact('msg','msgbar'));
    }
    public function kill($id)
    {
        $item = Messages::withTrashed()->where('id',$id)->first();

        $item->forceDelete();

        Session::flash('success','You are succesfully deleted the message.');

        return redirect()->back();
    }
}
