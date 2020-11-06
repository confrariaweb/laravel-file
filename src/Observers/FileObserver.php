<?php

namespace ConfrariaWeb\File\Observers;

use ConfrariaWeb\File\Models\File;
use Illuminate\Support\Facades\Auth;

class FileObserver
{

    /**
     * Handle the post section "creating" event.
     *
     * @param \ConfrariaWeb\File\Models\File $file
     * @return void
     */
    public function creating(File $file)
    {
        $user_id = Auth::id();
        $file->setAttribute('user_id', $user_id);
    }

    /**
     * Handle the file "created" event.
     *
     * @param \ConfrariaWeb\File\Models\File $file
     * @return void
     */
    public function created(File $file)
    {
        //
    }

    /**
     * Handle the file "updated" event.
     *
     * @param \ConfrariaWeb\File\Models\File $file
     * @return void
     */
    public function updated(File $file)
    {
        //
    }

    /**
     * Handle the file "deleted" event.
     *
     * @param \ConfrariaWeb\File\Models\File $file
     * @return void
     */
    public function deleted(File $file)
    {
        //
    }

    /**
     * Handle the file "restored" event.
     *
     * @param \ConfrariaWeb\File\Models\File $file
     * @return void
     */
    public function restored(File $file)
    {
        //
    }

    /**
     * Handle the file "force deleted" event.
     *
     * @param \ConfrariaWeb\File\Models\File $file
     * @return void
     */
    public function forceDeleted(File $file)
    {
        //
    }
}
