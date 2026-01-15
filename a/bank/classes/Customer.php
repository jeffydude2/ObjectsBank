<?php

class Customer
{
    // variables
    public string $forename;
    public string $surname;
    public string $email;
    public array $accounts = [];

    // constructor
    public function __construct(string $forename, string $surname, string $email, array $accounts = [])
    {
        $this->forename = $forename;
        $this->surname  = $surname;
        $this->email    = $email;
        $this->accounts = $accounts; 
    }

 
    public function getFullName(): string
    {
        return $this->forename . ' ' . $this->surname;
    }

    public function addAccount(Account $account): void
    {
        $this->accounts[] = $account;
    }
}
