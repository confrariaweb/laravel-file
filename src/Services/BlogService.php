<?php

namespace ConfrariaWeb\Blog\Services;

use ConfrariaWeb\Blog\Contracts\BlogContract;
use ConfrariaWeb\Vendor\Traits\ServiceTrait;

class BlogService {

    use ServiceTrait;

    public function __construct(BlogContract $blog) {
        $this->obj = $blog;
    }

}
