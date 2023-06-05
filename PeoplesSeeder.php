<?php

use Illuminate\Database\Seeder;
use App\Peoples;

class PeoplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peoples::insert([
            'nama'=>"ineu",
            'alamat'=>"sukamundur",
            'umur'=>"16",
            'status_pekerjaan'=>"pelajar",
        ]);

        Peoples::insert([
            'nama'=>"sintia",
            'alamat'=>"sukamaju",
            'umur'=>"16",
            'status_pekerjaan'=>"pelajar",
        ]);

        Peoples::insert([
            'nama'=>"bella",
            'alamat'=>"bojongkunci",
            'umur'=>"16",
            'status_pekerjaan'=>"pelajar",
        ]);


        Peoples::insert([
            'nama'=>"melki",
            'alamat'=>"kalimantan",
            'umur'=>"17",
            'status_pekerjaan'=>"pelajar",
        ]);

        Peoples::insert([
            'nama'=>"sedek",
            'alamat'=>"banjaran",
            'umur'=>"17",
            'status_pekerjaan'=>"pelajar",
        ]);

        

    }
}
