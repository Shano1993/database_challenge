<?php

abstract class AbstractEntity
{
    private int $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AbstractEntity
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
