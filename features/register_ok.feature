@standard
Feature: Registration

  Scenario: Register User Success
    Given I am on "/register"
     When I fill in the following:
      | Username        | john              |
      | Email           | john@example.com  |
      | Password        | mypassword        |
      | form_repeat_password | mypassword        |

      And I check "form_accept_terms_of_use"
      And I press "form_register"
     Then I should be on "/register/success"

