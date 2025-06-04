<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'url',
        'imageable_id',
        'imageable_type',
    ];

    /**
     * Get the parent imageable model (user, post, etc.).
     */
    public function imageable()
    {
        return $this->morphTo();
    }


}
