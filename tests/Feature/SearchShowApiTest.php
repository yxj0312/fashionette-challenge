<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchShowApiTest extends TestCase
{
   /** @test */
   function it_search_a_tv_show_by_its_name()
   {
        $results = $this->get('api/search/?q=deadwood');   

        $this->assertEquals($results[0]['show']['name'], 'Deadwood');
   }
}
