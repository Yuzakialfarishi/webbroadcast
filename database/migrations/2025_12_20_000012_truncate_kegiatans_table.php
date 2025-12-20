<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Truncate kegiatans table to clear problematic data
        DB::table('kegiatans')->truncate();
    }

    public function down(): void
    {
        // Nothing to revert
    }
};
