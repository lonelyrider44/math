<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'answer',
        'subject_id',
        'chapter_id',
        'document_id'
    ];

    public function scopeApplyFilter($query){
        $request = request();
        return $query->when($request->filled('subject_id'), fn($query) => $query->where($request->only(['subject_id'])));

    }
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }
    public function document(){
        return $this->belongsTo(Document::class);
    }
}
