<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeImagesColumnTypeInPropertiesTable extends Migration
{
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->text('images')->change(); // Change to text or json as needed
        });
    }

    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('images')->change(); // Revert back if rolling back the migration
        });
    }
}
