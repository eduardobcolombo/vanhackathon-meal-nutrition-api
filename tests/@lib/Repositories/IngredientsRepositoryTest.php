<?php


use GoCanada\Repositories\IngredientsRepository;

class NdbClientTest extends TestCase
{

    /**
     * @test
     */
    public function it_gets_nutrients_by_ingredient()
    {
        $repo  = new IngredientsRepository();
        $ndbno = '28258';

        dd($repo->getNutrientsByIngredient($ndbno));

        
    }
}