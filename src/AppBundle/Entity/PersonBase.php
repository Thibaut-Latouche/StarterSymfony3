<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 @ORM\MappedSuperclass 
 */
class PersonBase
{
   
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastname;
}



