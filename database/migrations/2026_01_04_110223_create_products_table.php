<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::create('products',function(Blueprint $table){
            $table->id() ; 
            $table->string('name') ; 
            $table->longText('description') ;
            $table->unsignedInteger('quantity') ;
            $table->string('image') ;
            $table->unsignedDouble('price') ;
            $table->softDeletes() ;
            $table->timestamps() ; 
        }) ; 
    }
    public function down() {
        Schema::dropIfExists('products') ;
    }
}
?>