<?php namespace drugTeam\Repositories\UserRepositories;

use drugTeam\Models\User;

/**
 * * @author Antony Kalogeropoulos
 * @since 2/16/2016
 *
 * Static users. Please add your first name (the only required), last name, an url with an avatar of yours, and a website.
 */
class StaticUserRepository implements UserRepository
{

    public function getAll()
    {
        $rawUsers = [
            [
                'fName'   => 'Chiara',
                'lName'   => 'Karadimou',
                'role'    => 'AI, Machine Learning, Algorithms',
                'avatar'  => 'img/chiara.jpg',
                'website' => ''
            ],

            [
                'fName'   => 'Antony',
                'lName'   => 'Kalogeropoulos',
                'role'    => 'Web Dev, Teaching, Start-Ups',
                'avatar'  => 'img/antony.jpg',
                'website' => 'https://github.com/PadawanTony/'
            ],

	        [
		        'fName'   => 'Nourhan',
		        'lName'   => 'El Shenawi',
		        'role'    => 'AI, Philosophy',
		        'avatar'  => 'img/nourhan.png',
		        'website' => 'https://github.com/NourhanElshenawi/'
	        ],

//            [
//                //  Input your data here similar to above
//                'fName'   => '',
//                'lName'   => '',
//                'avatar'  => '',
//                'website' => ''
//            ],
        ];


        $users = [];

        foreach ($rawUsers as $rawUser) {
            $users[] = new User($rawUser);
        }

        return $users;
    }
}