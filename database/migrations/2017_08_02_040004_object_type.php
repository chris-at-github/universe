<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ObjectType extends Migration {

	/**
	 * @return void
	 */
	public function up() {
		Schema::table('objects', function(Blueprint $table) {
			$table->string('type')
				->after('name')
				->nullable();

			$table->index('type');
		});
	}

	/**
	 * @return void
	 */
	public function down() {
		Schema::table('objects', function(Blueprint $table) {
			$table->dropColumn('type');
		});
	}
}