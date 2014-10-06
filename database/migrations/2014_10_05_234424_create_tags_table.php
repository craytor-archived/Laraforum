<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * This migration is responsible for managing a tag 
 * or category of a post. Every post can have a tag
 * which a user can apply a filter through to view
 * specific posts. For example, a tag called 'Updates'.
 * Tags are predefined and must exist before posting.
 */

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 25)->unique();

			// Does this tag require a specific role to use?

			$table->integer('role_id')->unsigned()->nullable();


			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tags');
	}

}
