<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    protected $user = null;
    
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function showUsers()
    {
        $users = $this->user->getAllUsers();
        return response()->json(['responseCode' => 200, 'responseMessage'=> 'success','data' => $users]);
    }

    public function getUser($id)
    {
        $user = $this->user->getUserById($id);
        return response()->json(['responseCode' => 200, 'responseMessage'=> 'success','data' => $user]);
    }
 
}
