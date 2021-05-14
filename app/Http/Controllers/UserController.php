<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function itemIndex(){
        return User::find(1)->getItem;
    }

    function commentIndex(){
        return User::find(3)->getComments;
    }
}
