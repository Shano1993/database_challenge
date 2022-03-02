<?php

namespace App\Model\Entity;

use AbstractEntity;

class Role extends AbstractEntity
{
    private string $roleName;

    /**
     * @return string
     */
    public function getRoleName(): string
    {
        return $this->roleName;
    }

    /**
     * @param string $roleName
     * @return Role
     */
    public function setRoleName(string $roleName): self
    {
        $this->roleName = $roleName;
        return $this;
    }
}
