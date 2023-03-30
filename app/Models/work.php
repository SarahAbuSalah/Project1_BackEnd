<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class work extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['title' , 'image' , 'content'];


    public function services()
    {
        return $this->belongsTo(Service::class)->withDefault() ;
    }
}