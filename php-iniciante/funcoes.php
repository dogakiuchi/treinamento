<?php

function printMessage($message)
{
    echo $message . "<br>";
}

function deposit(array $account, float $value)
{
    if ($value < 0){
        printMessage("Incorrect value!");
    }else{
        $account['balance'] += $value;
    }
        return $account;
}

function withdraw(array $account, float $value)
{
    if ($value > $account['balance']){
        printMessage("Insufficient balance!");
    }else{
        $account['balance'] -= $value;
    }
        return $account;
}
