<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
	public function index(Request $request)
	{
		return view('profile.index');
	}

	public function store(Request $request)
	{
		$row = $request->validate([
			'name' => 'required|string'
		]);

		if (!is_null($request->password)) {
			$request->validate(['password' => 'required|string|min:8|confirmed']);
			$row['password'] = Hash::make($request->password);
		}

		User::where('id', Auth::user()->id)->update($row);

		return redirect('/profile')->with('success', 'Data berhasil diubah');
	}
}
