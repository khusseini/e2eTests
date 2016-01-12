<?php

namespace Tests\AppBundle\Pop\Element;

use SensioLabs\Behat\PageObjectExtension\PageObject\Element;

class RegisterForm extends Element
{
    protected $selector = 'form';

    public function register(
        $username = '',
        $email = '',
        $password = '',
        $passwordRepeat = '',
        $acceptTermsOfUse = false
    ) {

        $this->fillField('form_username', $username);
        $this->fillField('form_email', $email);
        $this->fillField('form_password', $password);
        $this->fillField('form_repeat_password', $passwordRepeat);
        $this->fillField('form_accept_terms_of_use', $acceptTermsOfUse);

        return $this;
    }
}