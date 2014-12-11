<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 12/11/14
 * Time: 1:36 PM
 */

namespace App\Polymorphic;


trait ValidatorTrait {

    /**
     * Returns true if all keys in the array to check are set in the array to match, otherwise false.
     * @param array $arrayToCheck
     * @param array $arrayToMatch
     * @return bool
     */
    public function arrayKeysMatch($arrayToCheck = [], $arrayToMatch = [])
    {
        $responses = [];
        foreach($arrayToCheck as $key => $value)
        {
            (array_key_exists($key, $arrayToMatch))? : array_push($responses, false);
        }
        return (in_array(false, $responses))? false: true;
    }

}