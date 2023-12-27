<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'nis' => '12108121',
                'name' => 'arief',
                'jk' => 'laki',
                'rombel' => 'pplg xii-5',
                'rayon' => 'cicurug 2'
            ],
            [
                'nis' => '12108122',
                'name' => 'alief',
                'jk' => 'laki',
                'rombel' => 'pplg xii-1',
                'rayon' => 'cicurug 2'
            ],
            [
                'nis' => '12108212',
                'name' => 'safitri',
                'jk' => 'perempuan',
                'rombel' => 'kln xii-1',
                'rayon' => 'cicurug 2'
            ],
            [
                'nis' => '12108577',
                'name' => 'kusma',
                'jk' => 'laki',
                'rombel' => 'tjkt xii-4',
                'rayon' => 'cicurug 2'
            ],
            [
                'nis' => '12103221',
                'name' => 'siti',
                'jk' => 'perempuan',
                'rombel' => 'kln xii-1',
                'rayon' => 'cicurug 2'
            ],
            [
                'nis' => '12108183',
                'name' => 'budi',
                'jk' => 'laki',
                'rombel' => 'pplg xii-3',
                'rayon' => 'cicurug 4'
            ],
            [
                'nis' => '12108283',
                'name' => 'febri',
                'jk' => 'laki',
                'rombel' => 'tjkt xii-3',
                'rayon' => 'cicurug 4'
            ],
            [
                'nis' => '12108383',
                'name' => 'kiki',
                'jk' => 'laki',
                'rombel' => 'tjkt xii-1',
                'rayon' => 'cicurug 4'
            ],
            [
                'nis' => '12108923',
                'name' => 'fitria',
                'jk' => 'perempuan',
                'rombel' => 'pmn xii-1',
                'rayon' => 'cicurug 4'
            ],
            [
                'nis' => '12103212',
                'name' => 'salma',
                'jk' => 'perempuan',
                'rombel' => 'pplg xii-1',
                'rayon' => 'cicurug 4'
            ],
            [
                'nis' => '12108121',
                'name' => 'ferdy',
                'jk' => 'laki',
                'rombel' => 'tjkt xii-3',
                'rayon' => 'ciawi 5'
            ],
            [
                'nis' => '12108111',
                'name' => 'sambo',
                'jk' => 'laki',
                'rombel' => 'pmn xii-2',
                'rayon' => 'ciawi 5'
            ],
            [
                'nis' => '12108521',
                'name' => 'fred',
                'jk' => 'laki',
                'rombel' => 'tjkt xii-1',
                'rayon' => 'ciawi 5'
            ],
            [
                'nis' => '12108911',
                'name' => 'guin',
                'jk' => 'perempuan',
                'rombel' => 'kln xii-2',
                'rayon' => 'ciawi 5'
            ],
            [
                'nis' => '12103322',
                'name' => 'siti',
                'jk' => 'perempuan',
                'rombel' => 'kln xii-1',
                'rayon' => 'ciawi 5'
            ],
            [
                'nis' => '12108291',
                'name' => 'huntara',
                'jk' => 'laki',
                'rombel' => 'pplg xii-4',
                'rayon' => 'sukasari 2'
            ],
            [
                'nis' => '12108011',
                'name' => 'sukarja',
                'jk' => 'laki',
                'rombel' => 'tjkt xii-4',
                'rayon' => 'sukasari 2'
            ],
            [
                'nis' => '12108322',
                'name' => 'lucy',
                'jk' => 'perempuan',
                'rombel' => 'dkv xii-2',
                'rayon' => 'sukasari 2'
            ],
            [
                'nis' => '12102321',
                'name' => 'najwa',
                'jk' => 'perempuan',
                'rombel' => 'htl xii-1',
                'rayon' => 'sukasari 2'
            ],
            [
                'nis' => '12108221',
                'name' => 'rio',
                'jk' => 'laki',
                'rombel' => 'pplg xii-1',
                'rayon' => 'sukasari 2'
            ],
        ]);
    }
}
