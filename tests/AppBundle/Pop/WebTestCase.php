<?php

namespace Tests\AppBundle\Pop;

use Symfony\Bundle\FrameworkBundle\Test as SfTests;

class WebTestCase extends SfTests\WebTestCase
{
    static $client;
    static $container;

    public static function createPopClient()
    {
        return static::createClient();
    }

    protected static function getPage($pageName)
    {
        return self::getContainer()
            ->get('pop.factory')
            ->createPage($pageName)
        ;
    }

    public static function getElement($elementName)
    {
        return self::getContainer()
            ->get('pop.factory')
            ->createElement($elementName)
        ;
    }

    public static function getClient()
    {
        if (!self::$client) {
            self::$client = self::createClient();
        }
        return self::$client;
    }

    public static function getContainer()
    {
        if (!self::$container) {
            self::$container = self::createClient()->getContainer();
        }
        return self::$container;
    }
}