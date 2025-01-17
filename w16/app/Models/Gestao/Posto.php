<?php

namespace App\Models\Gestao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    use HasFactory;

    protected $fillable = ['cidade_id', 'reservatorio', 'latitude', 'longitude'];

    public function cidade(){
        return $this->hasOne(Cidade::class);
    }
}
