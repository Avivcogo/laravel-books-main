<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function authors(){
=======
    public function authors() {
>>>>>>> 6574581fd52978f0ed442b0447ac0f9ddf394a0c
        return $this->belongsToMany(Author::class);
    }
}
