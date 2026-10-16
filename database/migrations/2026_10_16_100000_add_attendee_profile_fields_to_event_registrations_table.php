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
        Schema::table('event_registrations', function (Blueprint $table) {
            if (!Schema::hasColumn('event_registrations', 'registration_type')) {
                $table->string('registration_type')->default('participant')->after('id');
            }
            if (!Schema::hasColumn('event_registrations', 'occupation')) {
                $table->string('occupation')->nullable()->after('phone');
            }
            if (!Schema::hasColumn('event_registrations', 'organisation')) {
                $table->string('organisation')->nullable()->after('occupation');
            }
            if (!Schema::hasColumn('event_registrations', 'gender')) {
                $table->string('gender')->nullable()->after('organisation');
            }
            if (!Schema::hasColumn('event_registrations', 'country')) {
                $table->string('country')->nullable()->after('gender');
            }
            if (!Schema::hasColumn('event_registrations', 'state')) {
                $table->string('state')->nullable()->after('country');
            }
            if (!Schema::hasColumn('event_registrations', 'driver_association')) {
                $table->string('driver_association')->nullable()->after('state');
            }
            if (!Schema::hasColumn('event_registrations', 'driver_vehicle_type')) {
                $table->string('driver_vehicle_type')->nullable()->after('driver_association');
            }
            if (!Schema::hasColumn('event_registrations', 'driver_experience')) {
                $table->string('driver_experience')->nullable()->after('driver_vehicle_type');
            }
            if (!Schema::hasColumn('event_registrations', 'how_heard')) {
                $table->string('how_heard')->nullable()->after('driver_experience');
            }
            if (!Schema::hasColumn('event_registrations', 'expectations')) {
                $table->text('expectations')->nullable()->after('how_heard');
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
        Schema::table('event_registrations', function (Blueprint $table) {
            $columns = [
                'registration_type',
                'occupation',
                'organisation',
                'gender',
                'country',
                'state',
                'driver_association',
                'driver_vehicle_type',
                'driver_experience',
                'how_heard',
                'expectations',
            ];

            $table->dropColumn(array_filter($columns, function ($column) {
                return Schema::hasColumn('event_registrations', $column);
            }));
        });
    }
};
