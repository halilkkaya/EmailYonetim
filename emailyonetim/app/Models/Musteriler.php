<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musteriler extends Model
{
    use HasFactory;
    protected $table ='musteriler';
    protected $fillable = ["id","adsoyad","mail","telefon","created_at","updated_at"];


    public function firmalar()
    {
        return $this->hasMany(Firmalar::class, 'sahibi');
    }
}

