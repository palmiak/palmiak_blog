<?php
namespace App\Tags;

use Statamic\Tags\Tags;

class BetterPagination extends Tags
{
    protected static $handle = 'better_pagination';

    public function next()
    {
        $page = $this->params->get('page') ? $this->params->get('page') : 1;
        return '/page/' . ++$page;
    }

    public function prev()
    {
        $page = $this->params->get('page') ? $this->params->get('page') : 1;

        return --$page ===  1 ? '/' : '/page/' . $page;
    }
}
