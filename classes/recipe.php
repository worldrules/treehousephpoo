<?php

class Recipe
{
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Leonardo Carvalho";

    public function setTitle($title) {

        $this->title = ucwords($title);

    }
    
    public function displayRecipe() {

        echo $this->title . "by " . $this->source;

    }
    
 
} 

$recipe1 = new Recipe();

// $recipe1->displayRecipe();

$recipe1->setTitle("my first recipe");

echo $recipe1->title;






