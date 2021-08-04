<?php

namespace App\Repositories;

use App\Interfaces\RepoRepositoryInterface;
use Illuminate\Http\Request;


class RepoRepository implements RepoRepositoryInterface
{

    /**
     * @param Request $request
     * @return mixed|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function filterRepos(Request $request)
    {
        $top_views = $request->query('top_views') ?? 10;
        $sort = $request->query('sort') ?? 'stars';
        $order = $request->query('order') ?? 'desc';

        $queryFilters = '';
        if ($request->query('language') && $request->query('start_date')) {
            $queryFilters = 'created:">' . $request->query('start_date') . '"' . 'language:' . $request->query('language') . '&';
        } else if ($request->query('start_date')) {
            $queryFilters = 'created:">' . $request->query('start_date') . '"' . '&';
        } else if ($request->query('language')) {
            $queryFilters = 'language:' . $request->query('language') . '&';
        }

        return getEndpoint('https://api.github.com/search/repositories?q=' . $queryFilters . 'sort=' .
            $sort . '&order=' . $order . '&per_page=' . $top_views);
    }


}
