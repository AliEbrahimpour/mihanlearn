<?php

namespace App\Http\Controllers\Adminstrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Converter\TimeConverterInterface;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(3);
        return view('admin.User.listUsers',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.User.add_User');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        $record = new User();
        $record->name = $request->input('username');
        $record->password = Hash::make($request->input('password'));
        $record->email = $request->input('email');
        $record->role = $request->input('role');
        if($request->hasFile('profile')){
            $FileName = Time().'.'.$request->file('profile')->getClientOriginalExtension();
            if ($request->file('profile')->move('image/profile', $FileName)) {
                $record->image = $FileName;
            }
        }
        $record->save();
        return view('admin.User.add_User');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.User.editUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $record = $request->all();

        if($request->hasFile('profile')){
            $FileName = Time().'.'.$request->file('profile')->getClientOriginalExtension();
            if ($request->file('profile')->move('images/profile', $FileName)) {
                $record['profile'] = $FileName;
            }
        }

        $user->update($record);

        $users = User::latest()->paginate(3);
        return view('admin.User.listUsers',compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route('user.index'));
    }
}
