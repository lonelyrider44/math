<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapters')->delete();
        
        \DB::table('chapters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subject_id' => 1,
                'chapter_id' => NULL,
                'name' => 'Predmeti u prostoru i odnosi među njima',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            1 => 
            array (
                'id' => 2,
                'subject_id' => 1,
                'chapter_id' => NULL,
                'name' => 'Razvrstavanje predmeta prema svojstvima',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            2 => 
            array (
                'id' => 3,
                'subject_id' => 1,
                'chapter_id' => NULL,
                'name' => 'Skupovi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            3 => 
            array (
                'id' => 4,
                'subject_id' => 1,
                'chapter_id' => NULL,
                'name' => 'Prva desetica',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            4 => 
            array (
                'id' => 5,
                'subject_id' => 1,
                'chapter_id' => NULL,
                'name' => 'Druga desetica',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            5 => 
            array (
                'id' => 6,
                'subject_id' => 1,
                'chapter_id' => NULL,
                'name' => 'Prva stotina',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            6 => 
            array (
                'id' => 7,
                'subject_id' => 2,
                'chapter_id' => NULL,
                'name' => 'Brojevi do 100',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            7 => 
            array (
                'id' => 8,
                'subject_id' => 2,
                'chapter_id' => NULL,
                'name' => 'Sabiranje i oduzimanje do 100',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            8 => 
            array (
                'id' => 9,
                'subject_id' => 2,
                'chapter_id' => NULL,
                'name' => 'Zadaci sa dve operacije',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            9 => 
            array (
                'id' => 10,
                'subject_id' => 2,
                'chapter_id' => NULL,
                'name' => 'Množenje i deljenje do 100',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            10 => 
            array (
                'id' => 11,
                'subject_id' => 2,
                'chapter_id' => NULL,
                'name' => 'Matematički izrazi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            11 => 
            array (
                'id' => 12,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Prirodni brojevi do 1000',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            12 => 
            array (
                'id' => 13,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Merenje i mere',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            13 => 
            array (
                'id' => 14,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Tačka, poluprava, prava i ravan',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            14 => 
            array (
                'id' => 15,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Sabiranje i oduzimanje do 1000',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            15 => 
            array (
                'id' => 16,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Krug',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            16 => 
            array (
                'id' => 17,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Množenje i deljenje do 1000',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            17 => 
            array (
                'id' => 18,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Zavisnost proizvoda od činilaca',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            18 => 
            array (
                'id' => 19,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Ugao',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            19 => 
            array (
                'id' => 20,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Pravougaonik i kvadrat',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            20 => 
            array (
                'id' => 21,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Pismeno sabiranje i oduzimanje do 1000',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            21 => 
            array (
                'id' => 22,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Trougao',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            22 => 
            array (
                'id' => 23,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Pismeno množenje i deljenje do 1000',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            23 => 
            array (
                'id' => 24,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Podudarnost geometrijskih figura',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            24 => 
            array (
                'id' => 25,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Razlomci',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            25 => 
            array (
                'id' => 26,
                'subject_id' => 3,
                'chapter_id' => NULL,
                'name' => 'Matematički izrazi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            26 => 
            array (
                'id' => 27,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Skup prirodnih brojeva N i skup N_0',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            27 => 
            array (
                'id' => 28,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Jedinice za površinu',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            28 => 
            array (
                'id' => 29,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Sabiranje i oduzimanje u skupu N - 1. deo',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            29 => 
            array (
                'id' => 30,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Površina pravougaonika i kvadrata',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            30 => 
            array (
                'id' => 31,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Sabiranje i oduzimanje u skupu N - 2. deo',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            31 => 
            array (
                'id' => 32,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Kvadar i kocka',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            32 => 
            array (
                'id' => 33,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Množenje i deljenje - 1. deo',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            33 => 
            array (
                'id' => 34,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Jedinice za zapreminu',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            34 => 
            array (
                'id' => 35,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Množenje i deljenje - 2. deo',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            35 => 
            array (
                'id' => 36,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Matematički izrazi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            36 => 
            array (
                'id' => 37,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Razlomci',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            37 => 
            array (
                'id' => 38,
                'subject_id' => 4,
                'chapter_id' => NULL,
                'name' => 'Zapremina kocke i kvadra',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            38 => 
            array (
                'id' => 39,
                'subject_id' => 5,
                'chapter_id' => NULL,
                'name' => 'Skupovi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            39 => 
            array (
                'id' => 40,
                'subject_id' => 5,
                'chapter_id' => NULL,
                'name' => 'Osnovni geometrijski objekti',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            40 => 
            array (
                'id' => 41,
                'subject_id' => 5,
                'chapter_id' => NULL,
                'name' => 'Ugao',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            41 => 
            array (
                'id' => 42,
                'subject_id' => 5,
                'chapter_id' => NULL,
                'name' => 'Deljivost',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            42 => 
            array (
                'id' => 43,
                'subject_id' => 5,
                'chapter_id' => NULL,
                'name' => 'Razlomci',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            43 => 
            array (
                'id' => 44,
                'subject_id' => 5,
                'chapter_id' => NULL,
                'name' => 'Osna simetrija',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            44 => 
            array (
                'id' => 45,
                'subject_id' => 6,
                'chapter_id' => NULL,
                'name' => 'Celi brojevi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            45 => 
            array (
                'id' => 46,
                'subject_id' => 6,
                'chapter_id' => NULL,
                'name' => 'Racionalni brojevi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            46 => 
            array (
                'id' => 47,
                'subject_id' => 6,
                'chapter_id' => NULL,
                'name' => 'Trougao',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            47 => 
            array (
                'id' => 48,
                'subject_id' => 6,
                'chapter_id' => NULL,
                'name' => 'Četvorougao',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            48 => 
            array (
                'id' => 49,
                'subject_id' => 6,
                'chapter_id' => NULL,
                'name' => 'Površina četvorougla i trougla',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            49 => 
            array (
                'id' => 50,
                'subject_id' => 7,
                'chapter_id' => NULL,
                'name' => 'Realni brojevi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            50 => 
            array (
                'id' => 51,
                'subject_id' => 7,
                'chapter_id' => NULL,
                'name' => 'Pitagorina teorema',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            51 => 
            array (
                'id' => 52,
                'subject_id' => 7,
                'chapter_id' => NULL,
                'name' => 'Racionalni algebarski izrazi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            52 => 
            array (
                'id' => 53,
                'subject_id' => 7,
                'chapter_id' => NULL,
                'name' => 'Mnogougao',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            53 => 
            array (
                'id' => 54,
                'subject_id' => 7,
                'chapter_id' => NULL,
                'name' => 'Krug',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            54 => 
            array (
                'id' => 55,
                'subject_id' => 7,
                'chapter_id' => NULL,
                'name' => 'Funkcije',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            55 => 
            array (
                'id' => 56,
                'subject_id' => 7,
                'chapter_id' => NULL,
                'name' => 'Sličnost',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            56 => 
            array (
                'id' => 57,
                'subject_id' => 8,
                'chapter_id' => NULL,
                'name' => 'Tačka, prava i ravan',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            57 => 
            array (
                'id' => 58,
                'subject_id' => 8,
                'chapter_id' => NULL,
                'name' => 'Linearne jednačine i nejednačine sa jednom nepoznatom',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            58 => 
            array (
                'id' => 59,
                'subject_id' => 8,
                'chapter_id' => NULL,
                'name' => 'Prizma',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            59 => 
            array (
                'id' => 60,
                'subject_id' => 8,
                'chapter_id' => NULL,
                'name' => 'Piramida',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            60 => 
            array (
                'id' => 61,
                'subject_id' => 8,
                'chapter_id' => NULL,
                'name' => 'Linearna funkcija',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            61 => 
            array (
                'id' => 62,
                'subject_id' => 8,
                'chapter_id' => NULL,
                'name' => 'Sistemi linearnih jednačina sa dve nepoznate',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            62 => 
            array (
                'id' => 63,
                'subject_id' => 8,
                'chapter_id' => NULL,
                'name' => 'Valjak',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            63 => 
            array (
                'id' => 64,
                'subject_id' => 8,
                'chapter_id' => NULL,
                'name' => 'Kupa',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            64 => 
            array (
                'id' => 65,
                'subject_id' => 8,
                'chapter_id' => NULL,
                'name' => 'Lopta',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            65 => 
            array (
                'id' => 66,
                'subject_id' => 9,
                'chapter_id' => NULL,
                'name' => 'Logika i skupovi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            66 => 
            array (
                'id' => 67,
                'subject_id' => 9,
                'chapter_id' => NULL,
                'name' => 'Realni brojevi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            67 => 
            array (
                'id' => 68,
                'subject_id' => 9,
                'chapter_id' => NULL,
                'name' => 'Proporcionalnost',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            68 => 
            array (
                'id' => 69,
                'subject_id' => 9,
                'chapter_id' => NULL,
                'name' => 'Uvod u geometriju',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            69 => 
            array (
                'id' => 70,
                'subject_id' => 9,
                'chapter_id' => NULL,
                'name' => 'Geometrija',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            70 => 
            array (
                'id' => 71,
                'subject_id' => 9,
                'chapter_id' => NULL,
                'name' => 'Racionalni algebarski izrazi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            71 => 
            array (
                'id' => 72,
                'subject_id' => 9,
                'chapter_id' => NULL,
                'name' => 'Sličnost',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            72 => 
            array (
                'id' => 73,
                'subject_id' => 9,
                'chapter_id' => NULL,
                'name' => 'Trigonometrija pravouglog trougla',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            73 => 
            array (
                'id' => 74,
                'subject_id' => 10,
                'chapter_id' => NULL,
                'name' => 'Stepenovanje i korenovanje',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            74 => 
            array (
                'id' => 75,
                'subject_id' => 10,
                'chapter_id' => NULL,
                'name' => 'Kvadratna jednačina i kvadratna funkcija',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            75 => 
            array (
                'id' => 76,
                'subject_id' => 10,
                'chapter_id' => NULL,
                'name' => 'Eksponencijalna i logaritamska funkcija',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            76 => 
            array (
                'id' => 77,
                'subject_id' => 10,
                'chapter_id' => NULL,
                'name' => 'Trigonometrijske funkcije',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            77 => 
            array (
                'id' => 78,
                'subject_id' => 11,
                'chapter_id' => NULL,
                'name' => 'Površina geometrijskih figura u ravni',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            78 => 
            array (
                'id' => 79,
                'subject_id' => 11,
                'chapter_id' => NULL,
                'name' => 'Poliedri',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            79 => 
            array (
                'id' => 80,
                'subject_id' => 11,
                'chapter_id' => NULL,
                'name' => 'Obrtna tela',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            80 => 
            array (
                'id' => 81,
                'subject_id' => 11,
                'chapter_id' => NULL,
                'name' => 'Determinante i sistemi linearnih jednačina i nejednačina',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            81 => 
            array (
                'id' => 82,
                'subject_id' => 11,
                'chapter_id' => NULL,
                'name' => 'Vektori',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            82 => 
            array (
                'id' => 83,
                'subject_id' => 11,
                'chapter_id' => NULL,
                'name' => 'Analitička geometrija u ravni',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            83 => 
            array (
                'id' => 84,
                'subject_id' => 11,
                'chapter_id' => NULL,
                'name' => 'Elementarna teorija brojeva',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            84 => 
            array (
                'id' => 85,
                'subject_id' => 11,
                'chapter_id' => NULL,
                'name' => 'Kompleksni brojevi i polinomi',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            85 => 
            array (
                'id' => 86,
                'subject_id' => 12,
                'chapter_id' => NULL,
                'name' => 'Funkcije',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            86 => 
            array (
                'id' => 87,
                'subject_id' => 12,
                'chapter_id' => NULL,
                'name' => 'Izvod funkcije',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            87 => 
            array (
                'id' => 88,
                'subject_id' => 12,
                'chapter_id' => NULL,
                'name' => 'Integral',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            88 => 
            array (
                'id' => 89,
                'subject_id' => 12,
                'chapter_id' => NULL,
                'name' => 'Kombinatorika',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
            89 => 
            array (
                'id' => 90,
                'subject_id' => 12,
                'chapter_id' => NULL,
                'name' => 'Verovatnoća i statistika',
                'description' => NULL,
                'created_at' => '2024-12-15 02:37:18',
                'updated_at' => '2024-12-15 02:37:18',
            ),
        ));
        
        
    }
}