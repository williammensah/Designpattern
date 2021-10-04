<?php

namespace App\Repository;

use App\Models\User;

class UserRepository implements IUserRepository
{
  public function getAllUsers()
  {
    return User::all();
  }

  public function getUserById($id)
  {
      return User::find($id);
  }  

  
}
