<?php

// database/migrations/YYYY_MM_DD_create_posts_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Routing: This migration file is not directly related to routing, but it defines the structure of the database table, which will be accessed through routes.

        // Sessions: Not applicable to migrations.

        // URL Generation: Not directly related to URL generation, but it indirectly affects URL generation by providing a structure for data storage.

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('author');
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
        Schema::dropIfExists('posts');
    }
}
