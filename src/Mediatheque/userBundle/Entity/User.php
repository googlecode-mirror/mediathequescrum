<?php 

namespace Mediatheque\UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User implements UserInterface
{
   	
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;


     /**
     * @ORM\Column(type="string", length="255")
     */
    protected $password;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $username;


    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $name;

    
    public function __construct() {
        $this->news = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }


    
    // Account interface
    
	public function __toString(){

        return $this->getUsername();

    }

    public function getRoles(){

        return array('ROLE_ADMIN');

    }

    public function eraseCredentials(){

    }

    public function getSalt(){

        return '';

    }

    public function getPassword(){
        
        return $this->password;

    }

    public function setPassword($password){

        $this->password = $password;

    }

    public function equals(UserInterface $account){

        if($this->getUsername() == $account->getUsername()){

            return true;
        }

        return false;
        
    }
}

?>