@pop
Feature: Registration

  Scenario: Register
    Given I am on page "Registration"
     When I register with valid data as "John"
     Then the page "RegistrationSuccess" should be open
