<?php

use Illuminate\Database\Seeder;

class podaciTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('podaci')->insert([
                'ime' => 'Pera',
                'prezime' => 'Peric',
                'grad' => 'Beograd',
                'ulica' => 'Cara Nikolaja',
                'broj' => '62',
                'telefonski_broj' => '123456789'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Laza',
                'prezime' => 'Lazic',
                'grad' => 'Zemun',
                'ulica' => 'Prilaz',
                'broj' => '3',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Laza',
                'prezime' => 'Peric',
                'grad' => 'Zemun',
                'ulica' => 'Iviceva',
                'broj' => '97',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Zika',
                'prezime' => 'Lazic',
                'grad' => 'Zemun',
                'ulica' => 'Pregrevica',
                'broj' => '67',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Mika',
                'prezime' => 'Djuric',
                'grad' => 'Zemun',
                'ulica' => 'Glavna',
                'broj' => '2',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Djura',
                'prezime' => 'Peric',
                'grad' => 'Zemun',
                'ulica' => 'Cara Dusana',
                'broj' => '64',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Petar',
                'prezime' => 'Lazic',
                'grad' => 'Zemun',
                'ulica' => 'Ugrinovacka',
                'broj' => '44',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Lana',
                'prezime' => 'Lazic',
                'grad' => 'Zemun',
                'ulica' => 'Prvomajska',
                'broj' => '11',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Luka',
                'prezime' => 'Lazic',
                'grad' => 'Zemun',
                'ulica' => 'Filipa Visnjica',
                'broj' => '5',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Jana',
                'prezime' => 'Djuric',
                'grad' => 'Zemun',
                'ulica' => 'Oracka',
                'broj' => '64',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Dana',
                'prezime' => 'Lazic',
                'grad' => 'Obrenovac',
                'ulica' => 'Kninska',
                'broj' => '58',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Mica',
                'prezime' => 'Mikic',
                'grad' => 'Obrenovac',
                'ulica' => 'Kralja Milana',
                'broj' => '36',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Fica',
                'prezime' => 'Djuric',
                'grad' => 'Obrenovac',
                'ulica' => 'Vuka Karadzica',
                'broj' => '92',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Pavle',
                'prezime' => 'Mikic',
                'grad' => 'Obrenovac',
                'ulica' => 'Fruskogorska',
                'broj' => '15',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Rista',
                'prezime' => 'Peric',
                'grad' => 'Beograd',
                'ulica' => 'Prote Mateje',
                'broj' => '14',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Kosta',
                'prezime' => 'Mikic',
                'grad' => 'Beograd',
                'ulica' => 'Deligradska',
                'broj' => '13',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Mila',
                'prezime' => 'Djuric',
                'grad' => 'Beograd',
                'ulica' => 'Resavska',
                'broj' => '136',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Laza',
                'prezime' => 'Mikic',
                'grad' => 'Beograd',
                'ulica' => 'Beogradska',
                'broj' => '20',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Laza',
                'prezime' => 'Kostic',
                'grad' => 'Beograd',
                'ulica' => 'Bircaninova',
                'broj' => '91',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Acim',
                'prezime' => 'Djuric',
                'grad' => 'Beograd',
                'ulica' => 'Mutapova',
                'broj' => '111',
                'telefonski_broj' => '987654321'
            ]);
            DB::table('podaci')->insert([
                'ime' => 'Mile',
                'prezime' => 'Mikic',
                'grad' => 'Beograd',
                'ulica' => 'Mekenzijeva',
                'broj' => '1',
                'telefonski_broj' => '987654321'
            ]);
        

      
    }
}
