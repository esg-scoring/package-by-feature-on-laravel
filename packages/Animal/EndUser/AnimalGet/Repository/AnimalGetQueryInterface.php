<?php

namespace Packages\Animal\EndUser\AnimalGet\Repository;


use Packages\Animal\EndUser\AnimalGet\Domain\Entity\AnimalEntity;

interface AnimalGetQueryInterface
{
    /**
     * @param int $id
     * @return AnimalEntity|null
     */
    public function AnimalGet(int $id): ?AnimalEntity;
}