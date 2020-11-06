<?PHP

namespace ConfrariaWeb\File\Repositories;

use ConfrariaWeb\File\Models\File;
use ConfrariaWeb\File\Contracts\FileContract;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class FileRepository implements FileContract
{
    use RepositoryTrait;

    function __construct(File $file)
    {
        $this->obj = $file;
    }

}
