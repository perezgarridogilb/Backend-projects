<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user(){
        /** Relación con un usuario */
        /** Un curso pertnenece a un Usuario / Usuario en singular */
        return $this->belongsTo(User::class);
    }

    public function posts(){
        /** Relación con post */
        /** Estamos haciendo la configuración en plural */
        return $this->hasMany(Post::class);
    }

    public function getExcerptAttribute(){
        /** Campo vitrtual */
        return substr($this->description, 0, 80) . "...";
    }

    public function similar(){
        /** Método personalizado */
        /* return $this->where('category_id', $this->category_id) */
        /** Para que no se repita en los similares */
        return $this->where('category_id', $this->category_id)->where('id', '!=', $this->id)
        ->with('user')
        ->take(2)
        ->get();
    }
}
