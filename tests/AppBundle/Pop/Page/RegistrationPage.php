<?php

namespace Tests\AppBundle\Pop\Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class RegistrationPage extends Page
{
    protected $path = '/register';

    public function register(
        $username = '',
        $email = '',
        $password = '',
        $passwordRepeat = '',
        $acceptTermsOfUse = false
    ) {
        $this->getElement('RegisterForm')
            ->register($username, $email, $password, $passwordRepeat, $acceptTermsOfUse)
            ->submit()
        ;
    }
}
