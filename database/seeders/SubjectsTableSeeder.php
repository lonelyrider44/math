<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Matematika 1',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:17',
                'updated_at' => '2024-12-15 02:37:17',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Matematika 2',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:17',
                'updated_at' => '2024-12-15 02:37:17',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Matematika 3',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:17',
                'updated_at' => '2024-12-15 02:37:17',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Matematika 4',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:17',
                'updated_at' => '2024-12-15 02:37:17',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Matematika 5',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:17',
                'updated_at' => '2024-12-15 02:37:17',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Matematika 6',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:17',
                'updated_at' => '2024-12-15 02:37:17',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Matematika 7',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:17',
                'updated_at' => '2024-12-15 02:37:17',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Matematika 8',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:17',
                'updated_at' => '2024-12-15 02:37:17',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Matematika I',
                'description' => NULL,
                'level' => 2,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Matematika II',
                'description' => NULL,
                'level' => 2,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Matematika III',
                'description' => NULL,
                'level' => 2,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Matematika IV',
                'description' => NULL,
                'level' => 2,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Fizika 6',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Fizika 7',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Fizika 8',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Engleski 5',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Engleski 6',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Engleski 7',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Engleski 8',
                'description' => NULL,
                'level' => 1,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Engleski I',
                'description' => NULL,
                'level' => 2,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Engleski II',
                'description' => NULL,
                'level' => 2,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Engleski III',
                'description' => NULL,
                'level' => 2,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Engleski IV',
                'description' => NULL,
                'level' => 2,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
        ));
        
        
    }
}