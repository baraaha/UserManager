<?php
// src/UserManagerServiceProvider.php
namespace UserManager;

use Illuminate\Support\ServiceProvider;

class UserManagerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('usermanager', function () {
            return new UserManager();
        });
    }
}
