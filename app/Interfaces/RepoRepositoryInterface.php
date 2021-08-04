<?php

namespace App\Interfaces;


use Illuminate\Http\Request;

interface RepoRepositoryInterface
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function filterRepos(Request $request);

}
