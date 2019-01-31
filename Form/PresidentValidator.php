<?php

namespace Form;

/**
 * Class PresidentValidator
 *
 * Check user input to create a new President.
 * Apply validators on each field and may return validation errors
 */
class PresidentValidator
{

    public function validate(array $presidentData)
    {
        $errors = [
            'total_errors' => 0,
            'firstName' => [],
            'lastName' => [],
            'country' => [],
            'life' => [],
            'strength' => [],
        ];

        if (!key_exists('firstName', $presidentData)) {
            $errors['firstName'][] = 'Le prénom est obligatoire';
            $errors['total_errors']++;
        } else {
            if (2 >= mb_strlen($presidentData['firstName'])) {
                $errors['firstName'][] = 'Le prénom doit avoir au moins 2 caractères';
                $errors['total_errors']++;
            }

            if (50 <= mb_strlen($presidentData['firstName'])) {
                $errors['firstName'][] = 'Le prénom doit avoir au plus 50 caractères';
                $errors['total_errors']++;
            }
        }

        if (!key_exists('lastName', $presidentData)) {
            $errors['lastName'][] = 'Le nom de famille est obligatoire';
            $errors['total_errors']++;
        } else {
            if (2 >= mb_strlen($presidentData['firstName'])) {
                $errors['lastName'][] = 'Le nom de famille doit avoir au moins 2 caractères';
                $errors['total_errors']++;
            }

            if (50 <= mb_strlen($presidentData['firstName'])) {
                $errors['lastName'][] = 'Le nom de famille doit avoir au plus 50 caractères';
                $errors['total_errors']++;
            }
        }

        return $errors;
    }
}
