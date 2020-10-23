<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendsController extends Controller
{
    /**
     * Display a listing of all registered friends.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      // Needs: 
      // Sort however Xavier wants
      // Allow Xavier to edit sorting 

        return view('friends.index', ['friends' => User::latest()->get()]);
    }
}