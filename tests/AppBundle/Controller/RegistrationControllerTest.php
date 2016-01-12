<?php

namespace Tests\AppBundle\Controller;

use Tests\AppBundle\Pop\Page\RegistrationPage;
use Tests\AppBundle\Pop\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
    public function testE2ESuccess()
    {
        /** @var RegistrationPage $page */
        $page = self::getPage('RegistrationPage');
        $successPage = self::getPage('RegistrationSuccessPage');

        $page->open();
        $page->register('John', 'john@doe.com', '123', '123', true);
        $this->assertTrue($successPage->isOpen());
    }
}