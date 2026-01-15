<?php

class Account
{
    // vairables
    public string $number;
    public string $type;
    protected int $balance;

    // constructor
    public function __construct(string $number, string $type, int $balance = 0)
    {
        $this->number  = $number;
        $this->type    = $type;
        $this->balance = $balance;
    }

    public function deposit(int $amount): int
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(int $amount): int
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }
}
