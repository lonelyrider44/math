<?php

use App\Models\Question;
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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->text('answer')->nullable();
            $table->foreignId('subject_id')->nullable()->constrained('subjects');
            $table->foreignId('chapter_id')->nullable()->constrained('chapters');
            $table->foreignId('document_id')->nullable()->constrained('documents');
            $table->timestamps();
        });

        // \DB::connection('hwga')->table('zadatak')->get()->each(function($zadatak){
        //     Question::create([
        //         'text' => $zadatak->zadatak,
        //         'subject_id' => $zadatak->idPredmeta
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
        Schema::dropIfExists('questions');
    }
};
