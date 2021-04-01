<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{
    public function showUserAPI(User $userID)
    {

        return $userID;
    }
    public function showUsers()
    {

        return User::all();
    }
    public function InsertUsers(Request $request)
    {

        $userAll = new User;
        $userAll->name = $request->input('name');
        $userAll->username = $request->input('username');
        $userAll->email = $request->input('email');
        $userAll->password = $request->input('password');
        $userAll->save();
        return response()->json($userAll);
    }
    public function UpdateUsers(Request $request , $id)
    {

        $userUpd = User::find($id);
        $userUpd->name = $request->input('name');
        $userUpd->username = $request->input('username');
        $userUpd->email = $request->input('email');
        $userUpd->password = $request->input('password');
        $userUpd->save();
        return response()->json($userUpd);

    }
    public function DeleteUsers(Request $request , $id)
    {

        $userDel = User::find($id);
        $userDel->delete();
        return response()->json($userDel);

    }
    public function index($userVal)
    {
        $userData = User::findorfail($userVal);

        return view('profiles/index', [
            'user' => $userData,
        ]);
    }
    public function edit(User $userID)
    {

        return view('profiles/edit', [
            'user' => $userID,
        ]);
    }
    public function update()
    {
        $data = request()->validate([
            'url' => 'required',
            'desc' => 'required',
            'image' => '',
        ]);

        if(request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
        }
        auth()->user()->profile()->update(array_merge(
            $data,
            ['image' => $imagePath ]
        ));

        return redirect('profile/' .auth()->user()->id);
    }
}
