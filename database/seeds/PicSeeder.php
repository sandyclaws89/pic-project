<?php

use Illuminate\Database\Seeder;
// Se non lo fa automaticamente devo assicurarmi di importare il mio model con il percorso
use App\Pic;
// Dobbiamo importare anche la clase Faker() (l'abbiamo dopo che abbiamo installato la libreria) e poi metterla dentro la funzione run per poterla usare
use Faker\Generator as Faker;


class PicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // assicurarsi che ci sia scritto cosi nella funzione
    public function run(Faker $faker)
    // Nella funzione run posso metterci manualmente i dati che verranno inseriti nella tabella. Questo metodo non si usa quasi mai. Importante è mettere save() alla fine.
    {


        // METODO CON INSERIMENTO DA ARRAY CON CICLO FOREACH
        // classica cosa, faccio un array e ciclo per riempire
        // $arrPics = [
        //     [
        //     'image'         =>  'imgX',
        //     'pic_title'     =>  'title X',
        //     'description'   =>  'Description X',
        //     'shoot_place'   =>  'Place X',
        //     'pic_date'      =>  '01-01-01',
        //     'pic_size'      =>  '999',
        //     'type'          =>  'TypeX',
        //     'on_sale'       =>  1,
        //     ],
        //     [
        //         'image'         =>  'imgY',
        //         'pic_title'     =>  'title Y',
        //         'description'   =>  'Description Y',
        //         'shoot_place'   =>  'Place Y',
        //         'pic_date'      =>  '02-02-02',
        //         'pic_size'      =>  '888',
        //         'type'          =>  'TypeY',
        //         'on_sale'       =>  1,
        //     ],
        //     [
        //         'image'         =>  'imgZ',
        //         'pic_title'     =>  'title Z',
        //         'description'   =>  'Description Z',
        //         'shoot_place'   =>  'Place Z',
        //         'pic_date'      =>  '03-03-03',
        //         'pic_size'      =>  '777',
        //         'type'          =>  'TypeZ',
        //         'on_sale'       =>  1,
        //     ],
        // ];
        /*  foreach ($arrPics as $picData) {
            $pic = new Pic();
            $pic ->image = $picData['image'];
            $pic ->pic_title = $picData['pic_title'];
            $pic ->description = $picData['description'];
            $pic ->shoot_place = $picData['shoot_place'];
            // Il tipo di dato date ha questo formato
            $pic ->pic_date = $picData['pic_date'];
            $pic ->pic_size = $picData['pic_size'];
            $pic ->type = $picData['type'];
            $pic ->on_sale = 1;
            $pic ->save();
            }
          */

        // METODO INSERIMENTO MANUALE
            // Si inizia sempre inizializzando una nuova classe che avrà il nome del model  importato poi posso procedere a dare i valori alla mia tabella, colonna per colonna.
            // $pic = new Pic();
            // $pic ->image = 'img1';
            // $pic ->pic_title ='titolo della foto' ;
            // $pic ->description = 'Lorem Ipsum is simply dummy text of the printing and   typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever     since the 1500s, when an unknown printer took a galley of type and scrambled it to  make a type specimen book. It has survived not only five centuries, but also the     leap into electronic typesetting, remaining essentially unchanged. It was   popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum   passages, and more recently with desktop publishing software like Aldus PageMaker     including versions of Lorem Ipsum.';
            // $pic ->shoot_place = 'woods';
            // // Il tipo di dato date ha questo formato
            // $pic ->pic_date = '2022-01-01';
            // $pic ->pic_size = 150;
            // $pic ->type = 'black and white';
            // $pic ->on_sale = 1;
            // $pic ->save();




        // METODO SOLO CON FILL
            // basta semplicemente mettere dentro il ciclo la classe del model (new Pic()) e    dare alla variabile che punta a quella del model la funzione fill(con dentro un    elemento dell'array da cui stiamo andando a prendere i dati), poi lancio il save e me li mette nell'array.
            /*
                foreach ($arrPics as $picData) {
                    $pic = new Pic();
                    $pic->fill($picData);
                    $pic->save();
                }
            */
         // METODO CON FAKERS
            // Con i fakers basta scrivere il tipo di fakers che si vuole utilizzare per ogni dato(consultare la documentazione fakersphp). Fatto ciò andiamo come al solito a chiamare la classe pic, usare il fill e lanciarlo sul DB con la funzione save()
            for ($i=1; $i <= 100; $i++) {
               $picData = [
                    'image'         =>  $faker->imageUrl(640, 480, 'photo', true),
                    'pic_title'     =>  $faker->words(1, true),
                    'post_title'    =>  $faker->sentence(2),
                    'description'   =>  $faker->text(),
                    'shoot_place'   =>  $faker->country(),
                    'pic_date'      =>  $faker->date(),
                    'pic_size'      =>  $faker->numberBetween(0, 100),
                    'type'          =>  $faker->word(),
                    'on_sale'       =>  $faker->numberBetween(0,1),
               ];

               $pic = new Pic();
               $pic->fill($picData);
               $pic->save();

            //    Pic::create($picData);
            }

    }
    // Finito di inserire i dati li posso mandare al DB con il comando php artisan db:seed --class=PicSeeder Posso farlo quante volte voglio
}

