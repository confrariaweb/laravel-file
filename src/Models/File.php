<?php

namespace ConfrariaWeb\File\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    protected $fillable = [
        'user_id',
        'group',
        'path',
        'name',
        'slug',
        'type'
    ];

    /**
     * Get the owning fileable model.
     */
    public function fileable()
    {
        return $this->morphTo();
    }

}
