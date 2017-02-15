<?php

namespace AddressBookBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PersonRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PersonRepository extends EntityRepository
{
    
    public function sortPeopleByName(){

        $people = $this->getEntityManager()->createQuery(
        'SELECT p FROM AddressBookBundle:Person p ORDER BY p.name'
        )->getResult();
        
        return $people;
    }
}
