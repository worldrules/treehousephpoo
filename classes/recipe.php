<?php

class Recipe
{
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Leonardo Carvalho";
    private $measurement = array(

        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon",
    );




    public function setTitle($title) {

        $this->title = ucwords($title);

    }
    
    public function addIngredient($item, $amount = null, $measure = null){

        if($amount != null && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float: " . gettype($amount) . " $amount given");
        }
        if($measure != null && !in_array(strtolower($measure), $this->measurement)) {
            exit("Please enter a valid measurement: " . implode(", ", $this->measurement));
        }
        $this->ingredients[] = array(
            "item" => $item,
            "amount" => $amount,
            "measure" =>strtolower($measure)

        );

    }



    public function displayRecipe() {

        echo $this->title . "by " . $this->source;

    }
    
} 









