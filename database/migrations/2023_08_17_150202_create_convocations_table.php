<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up(): void
	{
		Schema::create('convocations', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->date('date');
			$table->time('time');
			$table->string('location')->nullable();
			$table->longText('description')
				->max(500)
				->nullable();
			$table->string('slug')->unique();
			$table->timestamps();
		});
	}

	public function down(): void
	{
		Schema::dropIfExists('convocations');
	}
};
