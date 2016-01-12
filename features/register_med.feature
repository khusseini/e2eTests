@standard
Feature: Registration

  Scenario: Registration
    Given I am on "/register"
     When I fill in "form_username" with "john"
      And I fill in "form_email" with "john@example.com"
      And I fill in "form_password" with "mypassword"
      And I fill in "form_repeat_password" with "mypassword"
      And I check "form_accept_terms_of_use"
      And I press "Register"
     Then I should be on "/register/success"
      And I should see "Thank you!" in the "h1" element
