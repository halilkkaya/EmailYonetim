<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Musteriler;

class Firmalar extends Model
{
    use HasFactory;
    protected $table ='firmalar';
    protected $fillable = ["id","unvan","alan","tckn","kurulus","sanayisicil","ticaretsicil","sahibi","created_at","updated_at"];


    public function musteri()
    {
        return $this->belongsTo(Musteriler::class, 'sahibi');
    }
}
