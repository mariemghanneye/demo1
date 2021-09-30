<?php
/**
 * Created by PhpStorm.
 * User: bazinfo
 * Date: 30/09/2021
 * Time: 13:29
 */

namespace App\Tests\Controlleur;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogControlleurTest extends WebTestCase
{
    public function testIndexPage(){
        $client =static ::createClient();
        $client->request( 'GET','/blog');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}