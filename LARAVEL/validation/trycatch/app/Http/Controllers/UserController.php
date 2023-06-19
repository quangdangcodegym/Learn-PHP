<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function search(Request $request)
    {
        /**
        $user = User::find($request->input('user_id'));

        return view('users.search', compact('user'));

        $validatedData = $request->validate([
            'user_id' => 'required|integer|min:16|max:100',
        ]);
        **/
        
        try {
            $user = User::findOrFail($request->input('user_id'));
        } catch (ModelNotFoundException $exception) {
            return back()->withErrors(['e1' => $exception->getMessage(), "e2" => "AAA", "e3" => "BBB"])->withInput();
        }

        return view('users.search', compact('user'));
    }
}
