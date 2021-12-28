<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
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
    public function store(Request $req)
    {
        $user= new User();
        if($req->input('submit'))
        {

            $user->name=$req->input('name');
            $user->email=$req->input('email');
            $user->password=Hash::make($req->input('password'));
            $user->date_of_birth=$req->input('dob');
            $user->gender=$req->input('gender');
            $user->annual_income=$req->input('income');
            $user->occupation=$req->input('occupation');
            $user->family_type=$req->input('family');
            $user->manglik =$req->input('manglik');
            $user->partner_income =$req->input('p_income');
            $user->partner_occupation  =$req->input('p_occupation');
            $user->partner_family =$req->input('p_family');
            $user->partner_manglik =$req->input('p_manglik');
            $user->role_id='1';
            $user->Save();

            return redirect()->route('login');
        }

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
    public function redirection()
    {
        $role=Auth::User()->role_id;
        $po=Auth::User()->partner_occupation;
        $pf=Auth::User()->partner_family ;
        $id=Auth::User()->id;

        if($role=='1')
        {
            $select=User::where(['role_id'=>'1','partner_occupation'=>$po,'partner_family'=>$pf])->get();
            return view('dashboard',compact('select'));
        }
        else
        {
            return redirect()->route('adminsite');
        }

    }
}
