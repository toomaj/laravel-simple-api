<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiLibraryTest extends TestCase
{
    /**
     * API Library routing test
     */

    /** @test */
    public function it_shoud_route_to_show_action()
    {
      $this->call('GET', '/api/library/1');
      $this->assertResponseOk();
    }

    /** @test */
    public function it_shoud_route_to_post_action()
    {
      $this->call('POST', '/api/library');
      $this->assertResponseStatus(201);
    }
}
