<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=User::all();
        return view('admin.user',['datalist'=>$datalist]);
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {
        $data=User::find($id);
        $datalist=Role::all()->sortby('name');
        return view('admin.user_show',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
        $data=User::find($id);
        return view('admin.user_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,$id)
    {
        $data=User::find($id);
        $data->name=$request->input('name');
        $data->name=$request->input('email');
        $data->name=$request->input('phone');
        $data->name=$request->input('address');
        if ($request->file('image')!=null) {
            $data->profile_photo_path=Storage::putFile('profile-photos',$request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_users')->with('success','User Information Updated');

    }

    public function user_roles(Request $request,User $user,$id)
    {
        $data=User::find($id);
        $datalist=Role::all()->sortBy('name');
        return view('admin.user_roles',['data'=>$data,'datalist'=>$datalist]);
    }

    public function user_roles_store(Request $request,User $user,$id)
    {
        $user=User::find($id);
        $roleid=$request->input('roleid');
        $user->roles()->attach($roleid);
        return redirect()->back()->with('success','Role Added to User');
    }

    public function user_roles_delete(Request $request,User $user,$userid,$roleid)
    {
        $user=User::find($userid);
        $user->roles()->detach($roleid);
        return redirect()->back()->with('success','Role Deleted from User');
    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
