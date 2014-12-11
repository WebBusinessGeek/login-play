<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 12/11/14
 * Time: 5:26 PM
 */

namespace tests\user;


use App\InternalService\User\UserCommandController;
use Illuminate\Foundation\Testing\TestCase;

class UserCommandControllerTest extends \TestCase {


    public function test_validatorTrait_arrayKeysMatch_method_returns_true_if_ALL_keys_are_set_in_two_associative_arrays_otherwise_false()
    {
        //set arrays to check
        $array1 = [
            'email' => 'someValue',

            'password' => 'someValue',

            'name' => 'someValue'
        ];

        $array2 = [
            'number' => 'someValue',

            'password' => 'someValue',

            'name' => 'someValue'
        ];

        $array3 = [
            'name' => 'someValue',

            'password' => 'someValue',

            'email' => 'someValue'
        ];

        $array4 = [
            'password' => 'someValue',

            'number' => 'someValue',

            'name' => 'someValue'
        ];

        $array5 = [
            'name' => 'someValue',

            'password' => 'someValue',

            'email' => 'someValue',

            'number' => 'someValue'
        ];

        //new UserCommandController to invoke the method
        $userCmmdCtlr = new UserCommandController();

        //invoke on matching arrays and assert true
        $this->assertTrue($userCmmdCtlr->arrayKeysMatch($array1, $array3));
        $this->assertTrue($userCmmdCtlr->arrayKeysMatch($array2, $array4));
        $this->assertTrue($userCmmdCtlr->arrayKeysMatch($array4, $array2));
        $this->assertTrue($userCmmdCtlr->arrayKeysMatch($array3, $array1));
        $this->assertTrue($userCmmdCtlr->arrayKeysMatch($array1, $array5));

        //invoke on non-matching arrays and assert false
        $this->assertFalse($userCmmdCtlr->arrayKeysMatch($array1, $array2));
        $this->assertFalse($userCmmdCtlr->arrayKeysMatch($array3, $array4));
        $this->assertFalse($userCmmdCtlr->arrayKeysMatch($array2, $array1));
        $this->assertFalse($userCmmdCtlr->arrayKeysMatch($array4, $array3));

    }

    public function test_validatorTrait_arrayLengthsMatch_method_returns_true_if_the_length_of_both_arrays_match_otherwise_false()
    {
        //set arrays to check
        $array1 = [
            'email' => 'someValue',

            'password' => 'someValue',

            'name' => 'someValue'
        ];

        $array2 = [
            'name' => 'someValue',

            'password' => 'someValue',

            'email' => 'someValue',

            'number' => 'someValue'
        ];

        $array3 = [
            'name' => 'someValue',

            'password' => 'someValue',

            'email' => 'someValue'
        ];

        $array4 = [
            'password' => 'someValue',

            'number' => 'someValue',

            'name' => 'someValue',

            'email' => 'someValue'
        ];

        //userCommandController instance to invoke arrayLengthsMatch method

        //invoke method on matching arrays and assert true

        //invoke method on non-matching arrays and assert false



    }
}
