<?php

namespace Database\Seeders;

use App\Models\Firmalar;
use Illuminate\Database\Seeder;

class FirmalarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Örnek verileri veritabanına ekleme
        $firma1 = new Firmalar();
        $firma1->unvan = 'Örnek Firma 1';
        $firma1->alan = 'Bilgisayar Yazılımı';
        $firma1->tckn = '1234567890';
        $firma1->kurulus = '2000-01-01';
        $firma1->sanayisicil = 'ABC123';
        $firma1->ticaretsicil = 'XYZ456';
        $firma1->sahibi='yusuf';
        $firma1->save();

        $firma2 = new Firmalar();
        $firma2->unvan = 'Örnek Firma 2';
        $firma2->alan = 'Elektronik';
        $firma2->tckn = '9876543210';
        $firma2->kurulus = '2005-05-05';
        $firma2->sanayisicil = 'DEF789';
        $firma2->ticaretsicil = 'LMN012';
        $firma1->sahibi='halil';
        $firma2->save();

    }
}
