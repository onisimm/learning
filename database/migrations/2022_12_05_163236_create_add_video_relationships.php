<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->foreignId('language_id')->constrained();
            $table->foreignId('author_id')->constrained();
            $table->foreignId('video_category_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->dropForeign('videos_language_id_foreign');
            $table->dropColumn('language_id');
            $table->dropForeign('videos_author_id_foreign');
            $table->dropColumn('author_id');
            $table->dropForeign('videos_video_category_id_foreign');
            $table->dropColumn('video_category_id');
        });
    }
};
