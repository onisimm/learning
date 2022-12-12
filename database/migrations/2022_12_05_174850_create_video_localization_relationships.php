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
        Schema::table('video_localizations', function (Blueprint $table) {
            $table->foreignId('video_id')->nullable()->constrained();
            $table->foreignId('video_category_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('video_localizations', function (Blueprint $table) {
            $table->dropForeign('video_localizations_video_id_foreign');
            $table->dropColumn('video_id');
            $table->dropForeign('video_localizations_video_category_id_foreign');
            $table->dropColumn('video_category_id');
        });
    }
};
