<?PHP

namespace ConfrariaWeb\Blog\Repositories;

use ConfrariaWeb\Blog\Models\Blog;
use ConfrariaWeb\Blog\Contracts\BlogContract;
use ConfrariaWeb\Vendor\Traits\RepositoryTrait;

class BlogRepository implements BlogContract
{
    use RepositoryTrait;

    function __construct(Blog $blog)
    {
        $this->obj = $blog;
    }

}
