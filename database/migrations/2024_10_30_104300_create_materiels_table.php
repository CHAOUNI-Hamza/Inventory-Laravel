<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('quantity');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('bon_commande_id')->constrained('bon_commandes')->onDelete('cascade');
            $table->boolean('stock')->default(true);
            $table->string('num_inventaire');  // Ajout du champ num_inventaire
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiels');
    }
};
