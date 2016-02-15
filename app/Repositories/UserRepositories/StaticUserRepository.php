<?php namespace HubIT\Repositories\UserRepositories;

use HubIT\Models\User;

/**
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
                'avatar'  => 'img/callout.jpg',
                'website' => ''
            ],

            [
                'fName'   => 'Antony',
                'lName'   => 'Kalogeropoulos',
                'role'    => 'Web Dev, Teaching',
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