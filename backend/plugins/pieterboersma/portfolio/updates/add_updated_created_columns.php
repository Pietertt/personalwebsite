<?php
      namespace pieterboersma\Portfolio\Updates;

      use Illuminate\Support\Facades\Schema;
      use October\Rain\Database\Updates\Migration;

      class AddUpdatedCreatedColumns extends Migration {
            public function up(){
                Schema::table('october_items', function($table){
                    $table->string("updated_at")->default('');
                    $table->string("created_at")->default('');
                });
            }

            public function down(){

            }
      }
?>