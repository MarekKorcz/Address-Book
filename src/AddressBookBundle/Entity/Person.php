<?php

namespace AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AddressBookBundle\Repository\PersonRepository")
 */
class Person
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="person", cascade={"All"}) 
     */
    private $addresses;
    
     /**
     * @ORM\OneToMany(targetEntity="Phone", mappedBy="person", cascade={"All"})
     */
    private $phones;
    
     /**
     * @ORM\OneToMany(targetEntity="Email", mappedBy="person", cascade={"All"})
     */
    private $emails;
    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Person
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Person
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add addresses
     *
     * @param \AddressBookBundle\Entity\Address $addresses
     * @return Person
     */
    public function addAddress(\AddressBookBundle\Entity\Address $addresses)
    {
        $addresses->setPerson($this);
        $this->addresses[] = $addresses;

        return $this;
    }

    /**
     * Remove addresses
     *
     * @param \AddressBookBundle\Entity\Address $addresses
     */
    public function removeAddress(\AddressBookBundle\Entity\Address $addresses)
    {
        $this->addresses->removeElement($addresses);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Add phones
     *
     * @param \AddressBookBundle\Entity\Phone $phones
     * @return Person
     */
    public function addPhone(\AddressBookBundle\Entity\Phone $phones)
    {
        $this->phones[] = $phones;

        return $this;
    }

    /**
     * Remove phones
     *
     * @param \AddressBookBundle\Entity\Phone $phones
     */
    public function removePhone(\AddressBookBundle\Entity\Phone $phones)
    {
        $this->phones->removeElement($phones);
    }

    /**
     * Get phones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Add emails
     *
     * @param \AddressBookBundle\Entity\Email $emails
     * @return Person
     */
    public function addEmail(\AddressBookBundle\Entity\Email $emails)
    {
        $this->emails[] = $emails;

        return $this;
    }

    /**
     * Remove emails
     *
     * @param \AddressBookBundle\Entity\Email $emails
     */
    public function removeEmail(\AddressBookBundle\Entity\Email $emails)
    {
        $this->emails->removeElement($emails);
    }

    /**
     * Get emails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmails()
    {
        return $this->emails;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->phones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->emails = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
