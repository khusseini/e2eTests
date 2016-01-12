<?php

namespace Tests\AppBundle\Context;

use Behat\Behat\Context\SnippetAcceptingContext;
use SensioLabs\Behat\PageObjectExtension\Context\PageObjectContext;
use SensioLabs\Behat\PageObjectExtension\PageObject\Factory as PageObjectFactory;
use Tests\AppBundle\Pop\Page\RegistrationPage;

class PopFeatureContext extends PageObjectContext implements SnippetAcceptingContext
{
    /** @var RegistrationPage */
    private $currentPage;

    private $users = [
        'John' => [
            'username' => 'john',
            'email' => 'john@doe.com',
            'password' => 'test123',
            'password_repeat' => 'test123',
            'accept_tou' => true
        ]
    ];

    /**
     * @Given I am on page :pageName
     */
    public function iAmOnPage($pageName)
    {
        $this->currentPage = $this->getPage($pageName.'Page')->open();
    }

    /**
     * @When I register with valid data as :user
     */
    public function iRegisterWithValidDataAs($user)
    {
        $user = $this->users[$user];
        $this->currentPage->register(
            $user['username'],
            $user['email'],
            $user['password'],
            $user['password_repeat'],
            $user['accept_tou']
        );
    }

    /**
     * @Then the page :pageName should be open
     */
    public function thePageShouldBeOpen($pageName)
    {
        $this->getPage($pageName.'Page')->isOpen();
    }
}