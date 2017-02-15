<?php

namespace AddressBookBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PersonControllerTest extends WebTestCase
{
    public function testShowindex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}
