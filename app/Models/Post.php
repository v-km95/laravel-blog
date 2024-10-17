<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{

    //posts

    use HasFactory;

    protected $table = 'posts';

    /* protected $fillable = [
        'title',
        'slug',
        'category',
        'content'
    ]; */

    protected $guarded = [
        'is_active'
    ];

    protected function casts(): Array {

        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    protected function title(): Attribute {
        return Attribute::make(

            // Metodo set, Mutador
            set: function($value){
                return strtoupper($value);
            },

            // Metodo get, Accesor
            // get: function($value){
            //     return lcfirst($value);
            // }
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
