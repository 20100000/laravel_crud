<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Professor;

class Aluno extends Model
{
    protected $fillable = ['nome','email','ra','professor_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'alunos';
    public $with = ['professor'];

    public function professor(){
        return $this->belongsTo(Professor::class);
    }
}
