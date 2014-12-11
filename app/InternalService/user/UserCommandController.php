<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 12/11/14
 * Time: 1:31 PM
 */

namespace App\InternalService\User;


class UserCommandController {

    public function index()
    {

    }

    public function store($credentials = array())
    {
        //check [conditional]

            //validate that array contains correct keys

            //validate that array contains correct length

            //validate that no other users are using any unique values

            //validate format of all values

                // - if yes

                    //create new user

                    //add email and password to user

                    //save user in database

                    //return saved in string

                // - if no

                    //return Credentials invalid.
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
}