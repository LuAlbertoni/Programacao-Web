<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $fillable = ['cidade_id', 'titulo', 'descricao', 'requisitos', 'salario', 'prazo_candidatura', 'status'];

    protected $casts = [
        'prazo_candidatura' => 'date',
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
}
