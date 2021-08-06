<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSite extends Model
{
    use HasFactory;
    protected $table='Site';

    protected $fillable=['importacao', 'contabilidade','tics', 'tn', 'id_user'];

    public function relUser()
    {
        return $this->hasOne('App\Models\User','id', 'id_user');

    }
}
