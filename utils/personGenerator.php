<?php

namespace utils;

use Faker;

class personGenerator
{
    function generate($locale, $gender)
    {
        $cpfGenerator = new CpfGenerator();
        $cpf = $cpfGenerator->cpfRandom(1);

        $faker = Faker\Factory::create($locale);

        $firstName = $faker->firstName($gender);
        $lastName = $faker->lastName();

        $firstNameLower = strtolower($firstName);
        $lastNameLower = strtolower($lastName);
        $email = "$firstNameLower.$lastNameLower@$faker->freeEmailDomain";

        return [
            'cpf' => $cpf,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'address' => $faker->address,
            'phoneNumber' => $faker->phoneNumber(),
        ];
    }
}
