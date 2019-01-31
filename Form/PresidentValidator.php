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

    public function handle(array &$form, array $presidentData)
    {
        $this->hydrate($form['data'], $presidentData);
        $this->validate($form['errors'], $form['data']);
    }

    private function hydrate(array &$data, array $presidentData)
    {
        foreach ($data as $fieldName => $fieldValue) {
            $data[$fieldName] = $presidentData[$fieldName] ?? '';
        }
    }

    private function validate(array &$data, array $presidentData)
    {
        if (empty($presidentData['firstName'])) {
            $data['firstName'][] = 'Le prénom est obligatoire';
            $data['total_errors']++;
        } else {
            if (2 > mb_strlen($presidentData['firstName'])) {
                $data['firstName'][] = 'Le prénom doit avoir au moins 2 caractères';
                $data['total_errors']++;
            }

            if (50 < mb_strlen($presidentData['firstName'])) {
                $data['firstName'][] = 'Le prénom doit avoir au plus 50 caractères';
                $data['total_errors']++;
            }
        }

        if (empty($presidentData['lastName'])) {
            $data['lastName'][] = 'Le nom de famille est obligatoire';
            $data['total_errors']++;
        } else {
            if (2 > mb_strlen($presidentData['firstName'])) {
                $data['lastName'][] = 'Le nom de famille doit avoir au moins 2 caractères';
                $data['total_errors']++;
            }

            if (50 < mb_strlen($presidentData['firstName'])) {
                $data['lastName'][] = 'Le nom de famille doit avoir au plus 50 caractères';
                $data['total_errors']++;
            }
        }

        return $form;
    }
}
