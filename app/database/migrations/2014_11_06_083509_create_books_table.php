<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

   public function up(){

      Schema::create('books', function($table){
         $table->increments('id');
         $table->string('title')->unique();
         $table->string('author');
         $table->string('description');
         $table->string('price');
         $table->timestamps();
      });

 }

 	public function down(){
     Schema::drop('books');
 }

}

?>
