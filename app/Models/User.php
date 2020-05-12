<?php

namespace App\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * Getter Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Getter Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter Name
     *
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
