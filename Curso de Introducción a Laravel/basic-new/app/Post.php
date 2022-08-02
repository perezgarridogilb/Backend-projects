<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;
    
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    protected $fillable = [
        /** Si estamos enviando datos en cantidad entonces que los filtre */
        /** Ningún usuario podrá ingresar cualquier dato al azar */
        'title', 'body', 'iframe', 'image', 'user_id'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                /** Title como un slug */
                'source' => 'title',
                /** El update también se vea perjudicado por ello */
                'onUpdate' => true
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute($key)
    {
        /** Substraer del body 140 caracteres */
        return substr($this->body, 0, 140);
    }

    public function getGetImageAttribute($key)
    {
        if($this->image)
        return url("storage/$this->image");
    }
}
