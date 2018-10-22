<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Validator;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = DB::table('users')
          ->join('roles', 'users.role_id', '=', 'roles.id')
          ->select('users.*', 'roles.full_name')
          ->get();
          return view('admin.userlist',['admin'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.c_user');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
          'name'=>'required|string|max:255',
          'email'=>'required|string|email|max:255|unique:users',
          'password'=>'required|string|min:6|confirmed',
          'role_id'=>'required'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect('admin')->with('message','User berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $admin = User::where ('id',$id)->firstOrFail();
        // return view('admin.detailuser', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::find($id);
        return view('admin.e_user',compact('admin'));
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
        $user = User::find($id);
        $this->validate(request(),[
          'name'=>'required',
          'email'=>'required',
          'role_id'=>'required',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        // if ($request->has('password')) {
        //     $user->password = bcrypt($request->get('password'));
        // }

        $user->update();
        return redirect('admin')->with('message', 'User berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function resetpass(Request $request, $id)
    // {
    //   $user = User::find($id);
    //   $this->validate(request(),[
    //     'name'=>'required',
    //   ]);
    //   $user->name = $request->name;
    //   if ($request->has('password')) {
    //       $user->password = bcrypt($request->get('password'));
    //   }
    //   $user->save();
    //   return redirect('admin')->with('message', 'Password berhasil direset');
    // }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin')->with('message','User berhasil di hapus');
    }
}
