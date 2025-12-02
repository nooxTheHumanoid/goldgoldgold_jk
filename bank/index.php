<?php 
    require_once "Accounts.php";

    $daldojobs = new BankAccount("Daldojobs",20);
    $ernests = new BankAccount("Ernests",0.01);
    $noobs = new BankAccount("Dakteris N burts",0);
    $daldojobs->printInfo();
    $ernests->printInfo();
    $noobs->printInfo();
    $daldojobs->deposit(10000000);
    $daldojobs->printInfo();
    $daldojobs->withdraw(20000000);
    $daldojobs->printInfo();