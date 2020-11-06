<?php

namespace ConfrariaWeb\File\Services;

use ConfrariaWeb\File\Contracts\FileContract;
use ConfrariaWeb\Vendor\Traits\ServiceTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class FileService
{

    use ServiceTrait;

    public function __construct(FileContract $file)
    {
        $this->obj = $file;
    }

    public function uploadAttach($obj, $files, $path)
    {
        $attachFiles = $this->uploadFileInput($files, $path);
        if (isset($attachFiles)) {
            foreach ($attachFiles as $fileK => $fileV) {
                $obj->files()->create($fileV);
            }
        }
    }

    public function uploadFileInput($data, $path = '', $disk = 'public', $r = [])
    {
        if (isset($data)) {
            foreach ($data as $group => $fileGroups) {
                foreach ($fileGroups as $type => $files) {
                    foreach ($files as $file) {
                        $r[] = $this->uploadFile($file, $path, $group);
                    }
                }
            }
        }
        return $r;
    }

    public function uploadFile(UploadedFile $uploadedFile, $path = '', $group = 'general', $disk = 'public', $name = null)
    {
        $mimeType = $uploadedFile->getMimeType();
        $name = !is_null($name) ? $name : Str::random(25);
        $filename = $name . '.' . $uploadedFile->getClientOriginalExtension();
        $file = Storage::disk($disk)->putFileAs($path, $uploadedFile, $filename);
        $fileCreate = [
            'group' => $group,
            'type' => $mimeType,
            'path' => $file,
            'name' => $filename,
            'slug' => $filename
        ];
        return $fileCreate;
    }

}
