<?php

function voter(int $age): string
{
    if ($age < 18) {
        throw new Exception("You are not voter");
    }
    return true;
}

try {
    voter(11);
    echo "You are a voter";
} catch (Exception $e) {
    echo $e->getMessage();
}