<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['nome'];

    public function vagas()
    {
        return $this->hasMany(Vaga::class);
    }
}
