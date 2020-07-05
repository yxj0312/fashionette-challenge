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

   /** @test */
   function invalid_request_should_return_400_response()
   {
       $this->get('api/search/?invalid=deadwood')->assertStatus(400)->assertSee('Invalid request!');
   }

   /** @test */
   function the_results_should_be_non_case_insensitive()
   {
       
   }
}
