<?php
 
namespace app\components;
 
use app\models\User;

class AccessRule extends \yii\filters\AccessRule {
 
    /**
     * @inheritdoc
     */

    protected function matchRole($user)
    {
        if (empty($this->roles)) {
            return true;
        }
        foreach ($this->roles as $role) {
            if ($role === '?') {
                if ($user->getIsGuest()) {
                    return true;
                }
            } elseif ($role === '@') {
                if (!$user->getIsGuest()) {
                    return true;
                }
            } 
            // Verifica si el usuario a iniciado sesion y si coincide el Rol.
            elseif (!$user->getIsGuest() && $role === $user->identity->role) {
                return true;
            }
        }
        return false;
    }
}