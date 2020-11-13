<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialIdToUsersTable extends Migration
{

    const SOCIAL_SERVICES = [
        'instagram',
        'twitter',
        'linkedin',
        'yahoo',
        'yandex',
        'vkontakte'
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            foreach (self::SOCIAL_SERVICES as $service) {
                $table->text("{$service}_id")
                    ->after('google_id')
                    ->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            foreach (self::SOCIAL_SERVICES as $service) {
                $table->dropColumn("{$service}_id");
            }
        });
    }
}
