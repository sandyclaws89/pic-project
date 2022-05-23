<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Nella funzione up scrivo tutte le modifiche che voglio fare alle mie colonne, queste nello specifico sono colonne gia esistenti che sto andando a modificare. Alla fine devo mettere change().
        Schema::table('pics', function (Blueprint $table) {
            // sto facendo la modifica dando un valore di default alla colonna post_title, prima non aveva valori di default
            $table->string('post_title', 250)->default('post')->change();
            $table->string('pic_title', 250)->default('title')->change();
            // sto cambiando nome alla colonna che si chiama size, da size a pic_size
            $table->renameColumn('size', 'pic_size');
            // sto rendendo nullable la colonna pic_size
            $table->integer('size')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    // nella funzione down appunto devo andare a scrivere il contrario di quello che ho scritto in up
    {
        Schema::table('pics', function (Blueprint $table) {
            // il valore di default gliel'ho dato sopra, per scrivere il contrario gli do come default semplicemente null
            $table->string('post_title', 250)->default(NULL)->change();
            $table->string('pic_title', 250)->default(NULL)->change();
            // nullable ha come default true, devo dargli il contrario quindi false
            $table->integer('size')->nullable(false)->change();
            // il contrario è dal nome che volevo a questo
            $table->renameColumn('pic_size', 'size');
        });
    }
}
