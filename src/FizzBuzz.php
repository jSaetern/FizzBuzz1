<?php

namespace App;

class Fizzbuzz {
    public function fizzApp() {

        $results = array();
        $output = "";

        for ($i = 1; $i <= 20; $i++) {
            if ($i % 15 == 0) {
                echo 'FizzBuzz ';
                $output = 'FizzBuzz';
            } elseif ($i % 3 == 0) {
                echo 'Fizz ';
                $output = 'Fizz';
            } elseif ($i % 5 == 0) {
                echo 'Buzz ';
                $output = 'Buzz';
            } else {
                $output = $i;
            }

            $results[$i] = $output;

        }
        return $results;
    }
}