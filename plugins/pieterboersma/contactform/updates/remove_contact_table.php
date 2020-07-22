<?php
      namespace pieterboersma\Contactform\Updates;

      use Illuminate\Support\Facades\Schema;
      use October\Rain\Database\Updates\Migration;

      class CreateContactTable extends Migration {
            public function up(){
                Schema::drop('contact_info');
            }

            public function down(){
                Schema::drop('contact_info');
            }
      }
?>