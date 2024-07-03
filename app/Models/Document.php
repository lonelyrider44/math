<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [ 'filename','type'];

    protected $appends = ['file_url'];

    public function getFileUrlAttribute(){
        return Storage::disk('public')->url($this->filename);
        // return config('app.url').\Storage::url($this->filename);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

}
