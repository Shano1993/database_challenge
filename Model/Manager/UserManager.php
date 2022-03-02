<?php

namespace App\Model\Manager;

use App\Model\DB;
use App\Model\Entity\User;

class UserManager
{

    public function getUserById($id): User
    {

    }

    public function findAll(): array
    {
        $users = [];
        $query = DB::getPDO()->query("SELECT * FROM user");
        if ($query) {
            $userManager = new UserManager();

            foreach ($query->fetchAll() as $userData) {
                $users[] = (new User())
                    ->setId($userData['id'])
                    ->setEmail($userData['email'])
                    ->setFirstname($userData['firstname'])
                    ->setLastname($userData['lastname'])
                    ->setPassword($userData['password'])
                    ->setAge($userData['age'])
                    ;
            }
        }
        return $users;
    }
}
