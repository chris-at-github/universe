<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ObjectMigration extends Migration {

	/**
	 * @return void
	 */
	public function up() {
		Schema::create('objects', function(Blueprint $table) {
			$table->uuid('id');
			$table->primary('id');

			$table->string('name');
			$table->timestamps();
		});
	}

	/**
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('objects');
	}
}
