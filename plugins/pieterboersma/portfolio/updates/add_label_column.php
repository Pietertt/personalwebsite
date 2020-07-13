<?php
      namespace pieterboersma\Portfolio\Updates;

      use Illuminate\Support\Facades\Schema;
      use October\Rain\Database\Updates\Migration;

      class CreateItemsTable extends Migration {
            public function up(){
                  Schema::table('october_items', function($table){
                        $table->string("labels")->default('');
                  });
            }

            public function down(){

            }
      }
?>