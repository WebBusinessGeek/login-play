<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 12/11/14
 * Time: 1:31 PM
 */

namespace App\InternalService\User;


use App\Polymorphic\ValidatorTrait;

class UserCommandController {

    use ValidatorTrait;

    public function index()
    {

    }

    public function store($credentials = array())
    {
        //check [conditional]

            //validate that array keys match User $propertyArray - DONE

            //validate that array contains correct length - WORKING BELOW!

            //validate that no other users are using any unique values - Not done

            //validate format of all values - Not done

                // - if yes

                    //create new user - Not done

                    //add email and password to user - Not done

                    //save user in database - Not done

                    //return saved in string - Not done

                // - if no

                    //return Credentials invalid. - Not done
    }

    public function show()
    {
        //
    }

    public function update()
    {

    }

    public function destroy()
    {

    }


    //validate that array contains correct length - Not done
    public function arrayLengthsMatch($arrayToCheck = [], $arrayToMatch = [])
    {

    }



}