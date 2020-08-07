<?php
      namespace pieterboersma\Portfolio\Updates;

      use Illuminate\Support\Facades\Schema;
      use October\Rain\Database\Updates\Migration;

      class CreateItemsTable extends Migration {
            public function up(){
                  Schema::create('october_items', function($table){
                        $table->increments("id");
                        $table->string("title", 50);
                        $table->string("description", 200);
                        $table->string("identifier", 100);
                  });
            }

            public function down(){

            }
      }
?>