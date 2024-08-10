<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materis extends Model
{
    use HasFactory;

    protected $fillable = ['kursus_id', 'judul', 'deskripsi', 'link_embed'];

    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }
}
