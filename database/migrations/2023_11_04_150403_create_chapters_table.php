<?php

use App\Models\Chapter;
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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('chapter_id')->nullable()->constrained('chapters');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // \DB::connection('hwga')->table('oblast')->get()->each(function($oblast){
        //     Chapter::create([
        //         'name' => $oblast->nazivOblasti,
        //         'subject_id' => $oblast->idPredmeta,
        //     ]);
        //     // Subject::create([
        //     //     'name' => $predmet->nazivPredmeta,
        //     //     'level' => $predmet->idNivoa
        //     // ]);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
