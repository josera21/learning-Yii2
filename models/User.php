<?php

namespace app\models;

use dektrium\user\models\User as BaseUser;

class User extends BaseUser
{   
    // Roles
    const ROLE_USER = "usuario";
    const ROLE_MODERATOR = "moderador";
    const ROLE_ADMIN = "admin";

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        // add field to scenarios
        $scenarios['create'][]   = 'role';
        $scenarios['update'][]   = 'role';
        $scenarios['register'][] = 'role';
        return $scenarios;
    }
}
