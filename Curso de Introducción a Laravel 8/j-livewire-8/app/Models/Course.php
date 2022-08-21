<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user(){
        /** Un curso pertnenece a un Usuario / Usuario en singular */
        return $this->belongsTo(User::class);
    }

    public function getExcerptAttribute(){
        return substr($this->description, 0, 80) . "...";
    }
}
