<?php
// src/UserManager.php
namespace UserManager;

use App\Models\User;

class UserManager
{
    public function getUsers()
    {
        return User::all();
    }
}
