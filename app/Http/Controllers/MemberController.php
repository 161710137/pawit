<?php

namespace App\Http\Controllers;

use App\member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::with('Mobil')->get();
        return view('member.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Mobil::all();
        return view('member.create',compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'telepon'=>'required',
            'email'=>'required',
            'password'=>'required',
            'mobil_id'=>'required'
        ]);
        $members= new Member;
        $members->nama = $request->nama;
        $members->telepon = $request->telepon;
        $members->email = $request->email;
        $members->password = $request->password;
        $members->mobil_id = $request->mobil_id;
        $members->save();
        return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = Member::findOrFail($id);
        return view('member.show',compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(member $member)
    {
        $members = Member::findOrFail($id);
        $mobils = Mobil::all();
        $selectedMobil = Member::findOrfail($id)->mobil_id;
        return view('member.edit',compact('members','mobils','selectedMobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, member $member)
    {
        $this->validate($request,[
            'nama'=>'required',
            'telepon'=>'required',
            'email'=>'required',
            'password'=>'required',
            'mobil_id'=>'required'
        ]);
        $members = Member::findOrFail($id);
        $members->nama = $request->nama;
        $members->telepon = $request->telepon;
        $members->email = $request->email;
        $members->password = $request->password;
        $members->mobil_id = $request->mobil_id;
        $members->save();
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(member $member)
    {
        $members = Member::findOrFail($id);
        $members->delete();
        return redirect()->route('member.index');
    }
}
