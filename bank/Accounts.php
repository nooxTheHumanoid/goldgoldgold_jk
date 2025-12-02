<?php

class BankAccount{
    public $owner;
    private $balance;

    function __construct($owner,$balance){
        $this->owner = $owner;
        $this->balance = $balance;
    }

    public function deposit($amount){
        if ($amount > 0){
            $this->balance += $amount;
            echo "$this->owner put $amount$ in his account.<br>";
        }
    }
    public function withdraw($amount){
        if ($amount > 0){
            $this->balance -= $amount;
            echo "$this->owner nopizģīja $amount$ from his account.<br>";
        }
    }
    public function printInfo(){
        if ($this->balance > 0){
        echo "$this->owner has cancer but also has $this->balance$ in their account.<br>";
        }else{
            echo "$this->owner is dead broke, in debt, fat, ugly, heartbroken, depressed and is a gigner.<br>";
        }
    }

}