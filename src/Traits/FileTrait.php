<?php

namespace ConfrariaWeb\File\Traits;

trait FileTrait
{
    /**
     * Get all of the video's files.
     */
    public function files()
    {
        return $this->morphMany('ConfrariaWeb\File\Models\File', 'fileable');
    }
}
