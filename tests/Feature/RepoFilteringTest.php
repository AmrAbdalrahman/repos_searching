<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RepoFilteringTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * /api/v1/repos?sort=stars&order=desc
     *
     * @return void
     */
    public function testShouldReturnAllReposSortByStarsAndOrderByDesc()
    {

        $response = $this->get("api/v1/repos?sort=stars&order=desc");
        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            "error" => null,
        ]);
        $response->assertJsonStructure(
            ['data' =>

                [
                    'total_count',
                    'incomplete_results',
                    'items' =>
                        [
                            '*' => [
                                'id',
                                'node_id',
                                'name',
                                'full_name',
                                'private',
                                'owner',
                                'html_url',
                                'url',
                                'forks_url',
                                'teams_url',
                                'language',
                                'has_wiki',
                            ]
                        ],
                ],
                'status',
                'error'
            ]
        );
    }

    /**
     * /api/v1/repos?sort=stars&order=desc&top_views=100
     *
     * @return void
     */
    public function testShouldReturnAllReposSortByStarsAndOrderByDescAndTopViews()
    {

        $response = $this->get("api/v1/repos?sort=stars&order=desc&top_views=100");
        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            "error" => null,
        ]);
        $response->assertJsonStructure(
            ['data' =>

                [
                    'total_count',
                    'incomplete_results',
                    'items' =>
                        [
                            '*' => [
                                'id',
                                'node_id',
                                'name',
                                'full_name',
                                'private',
                                'owner',
                                'html_url',
                                'url',
                                'forks_url',
                                'teams_url',
                                'language',
                                'has_wiki',
                            ]
                        ],
                ],
                'status',
                'error'
            ]
        );
    }

    /**
     * /api/v1/repos?sort=stars&order=desc&language=php
     *
     * @return void
     */
    public function testShouldReturnAllReposSortByStarsAndOrderByDescAndLanguage()
    {

        $response = $this->get("api/v1/repos?sort=stars&order=desc&language=php");
        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            "error" => null,
        ]);
        $response->assertJsonStructure(
            ['data' =>

                [
                    'total_count',
                    'incomplete_results',
                    'items' =>
                        [
                            '*' => [
                                'id',
                                'node_id',
                                'name',
                                'full_name',
                                'private',
                                'owner',
                                'html_url',
                                'url',
                                'forks_url',
                                'teams_url',
                                'language',
                                'has_wiki',
                            ]
                        ],
                ],
                'status',
                'error'
            ]
        );
    }

    /**
     * /api/v1/repos?sort=stars&order=desc&start_date=2018-09-30
     *
     * @return void
     */
    public function testShouldReturnAllReposSortByStarsAndOrderByDescAndStartDate()
    {

        $response = $this->get("api/v1/repos?sort=stars&order=desc&start_date=2018-09-30");
        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            "error" => null,
        ]);
        $response->assertJsonStructure(
            ['data' =>

                [
                    'total_count',
                    'incomplete_results',
                    'items' =>
                        [
                            '*' => [
                                'id',
                                'node_id',
                                'name',
                                'full_name',
                                'private',
                                'owner',
                                'html_url',
                                'url',
                                'forks_url',
                                'teams_url',
                                'language',
                                'has_wiki',
                            ]
                        ],
                ],
                'status',
                'error'
            ]
        );
    }

    /**
     * /api/v1/repos?sort=stars&order=desc&language=php&start_date=2018-09-30
     *
     * @return void
     */
    public function testShouldReturnAllReposSortByStarsAndOrderByDescAndStartDateAndLanguage()
    {

        $response = $this->get("api/v1/repos?sort=stars&order=desc&language=php&start_date=2018-09-30");
        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            "error" => null,
        ]);
        $response->assertJsonStructure(
            ['data' =>

                [
                    'total_count',
                    'incomplete_results',
                    'items' =>
                        [
                            '*' => [
                                'id',
                                'node_id',
                                'name',
                                'full_name',
                                'private',
                                'owner',
                                'html_url',
                                'url',
                                'forks_url',
                                'teams_url',
                                'language',
                                'has_wiki',
                            ]
                        ],
                ],
                'status',
                'error'
            ]
        );
    }

    /**
     * /api/v1/repos?sort=stars&order=desc&language=php&start_date=2018-09-30&top_views=100
     *
     * @return void
     */
    public function testShouldReturnAllReposWithAllFilters()
    {

        $response = $this->get("api/v1/repos?sort=stars&order=desc&language=php&start_date=2018-09-30&top_views=100");
        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            "error" => null,
        ]);
        $response->assertJsonStructure(
            ['data' =>

                [
                    'total_count',
                    'incomplete_results',
                    'items' =>
                        [
                            '*' => [
                                'id',
                                'node_id',
                                'name',
                                'full_name',
                                'private',
                                'owner',
                                'html_url',
                                'url',
                                'forks_url',
                                'teams_url',
                                'language',
                                'has_wiki',
                            ]
                        ],
                ],
                'status',
                'error'
            ]
        );
    }
}
