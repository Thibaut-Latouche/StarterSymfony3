<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *  @ORM\Entity
 */
class Person extends PersonBase{
    
     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    
}