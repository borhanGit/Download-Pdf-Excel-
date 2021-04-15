<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data          =  [
            ['id'      => 1,
            'name'     => 'Md. Borhan Uddin',
            'email'    => 'borhan@gmail.com',
            'password' => 'welcome'
        ],
            ['id'      => 2,
            'name'     => 'Md. Shoag Uddin',
            'email'    => 'shoag@gmail.com',
            'password' => 'welcome'
        ],
            ['id'      => 3,
            'name'     => 'Md. Abdullah Uddin',
            'email'    => 'abdullah@gmail.com',
            'password' => 'welcome'
        ],
            ['id'      => 4,
            'name'     => 'Md. Arafat Uddin',
            'email'    => 'arafat@gmail.com',
            'password' => 'welcome'
        ],
            ['id'      => 5,
            'name'     => 'Md. Saifullah Uddin',
            'email'    => 'saifullah@gmail.com',
            'password' => 'welcome'
        ],
            ['id'      => 6,
            'name'     => ' Montu ',
            'email'    => 'montu@gmail.com',
            'password' => 'welcome'
        ],
            ['id'      => 7,
            'name'     => 'Md. Sujon Uddin',
            'email'    => 'sujon@gmail.com',
            'password' => 'welcome'
        ],
            ['id'      => 8,
            'name'     => 'Md. Ashiq Uddin',
            'email'    => 'ashiq@gmail.com',
            'password' => 'welcome'
        ],
            ['id'      => 9,
            'name'     => 'Md. Sayeed Uddin',
            'email'    => 'sayeed@gmail.com',
            'password' => 'welcome'
        ],
            ['id'      => 10,
            'name'     => 'Md. Johir Uddin',
            'email'    => 'johir@gmail.com',
            'password' => 'welcome'
        ],

        ];
        DB::table('users')->insert($data);
    }
}
