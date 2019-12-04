<?php


namespace App\Models;

/**
 * Description of Category
 *
 * @author Wallison Cardoso
 */
use Core\BaseModelEloquent;

class Category extends BaseModelEloquent
{
    public $table = "categories";

    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}