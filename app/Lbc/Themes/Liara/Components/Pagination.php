<?php

namespace App\Lbc\Themes\Liara\Components;

use Illuminate\Pagination\LengthAwarePaginator;

class Pagination
{
    static function get($request, $items, $perPage)
    {
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($items);
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());

        return $paginatedItems;
    }
}
