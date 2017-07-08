<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *  @ORM\Entity
 */
class Employee extends PersonBase{
    
     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    
}