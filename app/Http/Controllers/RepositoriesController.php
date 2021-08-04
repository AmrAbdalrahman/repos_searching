<?php

namespace App\Http\Controllers;

use App\Repositories\RepoRepository;
use Illuminate\Http\Request;

class RepositoriesController extends Controller
{

    private $repoRepository;

    /**
     * @param RepoRepository $repoRepository
     */
    public function __construct(RepoRepository $repoRepository)
    {
        $this->repoRepository = $repoRepository;
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function filter(Request $request)
    {
        $data = $this->repoRepository->filterRepos($request);
        return $this->apiResponse($data, null, 200);
    }
}
