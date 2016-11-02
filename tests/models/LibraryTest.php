<?php

use App\Library;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LibraryTest extends TestCase
{
  use DatabaseTransactions;

  /** @test **/
  public function it_should_respond_to_attributes()
  {
    // create library object
    $library = factory(Library::class)->create();

    // library attributes
    $attributes = $library->getAttributes();

    // library object should respond to defined attributes
    $this->assertArrayHasKey('name', $attributes);
    $this->assertArrayHasKey('code', $attributes);
    $this->assertArrayHasKey('abbr', $attributes);
    $this->assertArrayHasKey('url', $attributes);
  }
}
