<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aluno;

class Professor extends Model
{
    protected $fillable = ['nome','email'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'professores';

    public function aluno(){
        return $this->hasMany(Aluno::class, 'professor_id');
    }
}
