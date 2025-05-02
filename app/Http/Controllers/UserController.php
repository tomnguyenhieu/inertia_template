<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
	public function index()
	{
		$user = User::find(1);
		return Inertia::render('App', [
			'user' => $user
		]);
	}
}
