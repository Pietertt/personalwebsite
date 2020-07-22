<?php
      namespace pieterboersma\Contactform\Updates;

      use Illuminate\Support\Facades\Schema;
      use October\Rain\Database\Updates\Migration;

      class CreateContactTable extends Migration {
            public function up(){
                Schema::create('contact_info', function($table){
                    $table->string("email_address_to", 50);
              });
            }

            public function down(){
                Schema::drop('contact_info');
            }
      }
?>