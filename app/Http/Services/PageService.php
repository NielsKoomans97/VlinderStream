<?php

namespace App\Http\Services;

use App\Http\Requests\PageRequest;
use App\Models\page;
use Illuminate\Http\RedirectResponse;

class PageService
{
    public function store(PageRequest $pageRequest): RedirectResponse
    {
        $page = new page();
        $page->title = $pageRequest->title;
        $page->content = $pageRequest->content;
        $page->user_id = $pageRequest->user_id;

        $page->save();

        return redirect(route('index'));
    }
}
