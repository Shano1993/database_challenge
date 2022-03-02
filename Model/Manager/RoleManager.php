<?php

namespace App\Model\Manager;

use App\Model\DB;
use App\Model\Entity\Role;

class RoleManager
{
    public function getRoleName(): array
    {
        $roles = [];
        $query = DB::getPDO()->query("SELECT * FROM user_role WHERE user_role.user_fk = role.role_name");
        if ($query) {
            $roles = new Role();
            foreach ($query->fetchAll() as $roleData) {
                $roles[] = (new Role())
                    ->setId($roleData['id'])
                    ->setRoleName($roleData['role_name'])
                ;
            }
        }
        return $roles;
    }
}
