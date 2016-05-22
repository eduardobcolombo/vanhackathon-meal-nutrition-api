<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;

class RecipeControllerTest extends TestCase
{
    /**
     * @test
     */
    public function test_it_responses_all_recipe_nutrition_info()
    {
        $this->get('/api/v1/recipe/1/nutrition-info');
        $responseData = $this->getResponseData();
        $this->assertTrue(isset($responseData->nutrients));
        foreach($responseData->nutrients as $nutrient){
            $this->assertTrue(isset($nutrient->name));
            $this->assertTrue(isset($nutrient->value));
            $this->assertTrue(isset($nutrient->unit));
            $this->assertTrue(isset($nutrient->group));
        }

    }



}


