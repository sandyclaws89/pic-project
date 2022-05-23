<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pic;


class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  Qui nella funzione index ci metto tutta la logica di base del mio sito
    public function index()
    {
        $pics = Pic::paginate(15);

        // $pics = Pic::all();
        // E' pratica comune chiamare la view con il nome del metodo
        return view('pics.index', compact('pics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // il metodo create è praticamente questa è la pagina con il form dove si mettono i dati, quando si fa submit i dati vengono inviati ad un indirizzo, che sarebbe quello del post.
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  è il metodo che salva i dati nel db, crea un id nuovo
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // il metodo show contiene praticamente le pagine con i dettagli di un elemento

    // Invece di fare uno dei due modi (scritti nella funzione sotto) un modo più veloce di estrarre l'id selezionato e quindi mostrare i dettagli di un articolo, è passare alla funzione show non l'id ma tutto il model Pic e la variabile $pic
    public function show(Pic $pic)
    {
        // dd($pic);
        // bisogna ritornare la view dove ci saranno i dettagli del post aperto(pics.show), poi il titolo del documento aperto (pageTitle) e pic generico che conterrà tutte le info del post aperto
        return view('pics.show', [
            'pageTitle' =>$pic->pic_title,
            'pic'       =>$pic,
        ]);
        // con questa funzione sto estraendo l'id della card selezionata. findOrFail perché se non trova un parametro non da null ma lancia l'error 404. Queste cose le trovo sulla documentazione Laravel.
        // $pic = Pic::findOrFail($id);

        // un altro modo è fare un semplice controllo con if
        /*$pic = Pic::find($id);
        if ($pic) {
            dd($pic);
        }
        else {
            abort(404);
        }*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  questo metodo è la pagina con il form che modifica quando voglio fare le modifiche
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // il metodo appunto per gli aggiornatmenti
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // come dice il nome cancella
    public function destroy($id)
    {
        //
    }
}



/*<?php

namespace App\Http\Controllers;

use App\Pic;
use Illuminate\Http\Request;


/*Ora li ho cancellati ma c'erano altre funzioni già preparate da Laravel (ad esempio destroy, edit e altre) che fanno specifiche cose. Questa implementazione c'è se si installano model, controller, migration, factories e seeder tutti insieme con il comando php artisan make:model --all (name), non c'è neanche bisogno di fare use App\Pic perché lo fa da solo con il comando */
// class PicController extends Controller
// {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
        /* la funzione paginate serve a impaginare i risutltati, qunidi a decidere quanti mostrarne per pagina, di default mi da una lista pagine da scorrere. Per farlo funzionare però nel blade di destinazione devo inserire {{$pics->links()}}.Si può applicare lo stile alla lista chiudendo l'istruzione dentro un contenitore, con Bootrsap o con Tailwind(è un framework css, leggere documentazione). Con questi passaggi si possono creare dei file blade che contengono il codice della paginazione:
        - Lanciare da terminale il comando (php artisan vendor:publish)
        - a questo punto ci fa scegliere una lista di cose, dobbiamo scegliere quelli dei pagination(num 8)
        - a questo punto sulle view, sotto vendor ci ha creato vari file blade, che hanno la struttura html della paginazione di default
        - Andare in app/providers/AppServiceProvider.
        - Dentro la funzione boot() mettere l'istruzione Paginator::useTailWind();
        */
        // $pics = Pic::paginate();

        // $pics = Pic::all();

    //     return view('partials.listing', compact('pics'));
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pic  $pic
     * @return \Illuminate\Http\Response
     */
//     public function show(Pic $pic)
//     {
//         //
//     }
// }
