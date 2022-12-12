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
            $table->dropForeign('videos_language_id_foreign');
            $table->dropColumn('language_id');
        });

        Schema::table('video_localizations', function (Blueprint $table) {
            $table->foreignId('language_id')->nullable()->constrained();
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
            $table->foreignId('language_id')->constrained();
        });

        Schema::table('video_localizations', function (Blueprint $table) {
            $table->dropForeign('videos_language_id_foreign');
            $table->dropColumn('language_id');
        });
    }
};
