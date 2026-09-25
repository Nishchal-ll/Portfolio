<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('title');
            $table->string('project_role')->nullable()->after('category');
            $table->text('overview')->nullable()->after('description');
            $table->json('features')->nullable()->after('overview');
            $table->text('architecture')->nullable()->after('features');
            $table->text('challenges')->nullable()->after('architecture');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['slug', 'project_role', 'overview', 'features', 'architecture', 'challenges']);
        });
    }
};
