<?php

class Recipe
{
    private $title;
    public $ingredients = array();
    private $instructions = array();
    private $yield;
    private $tag = array();
    private $source = "Leonardo Carvalho";
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


    public function getTitle() {

        return $this->title; 
    }

    public function setTitle($title) {

        $this->title = ucwords($title);

    }

    public function addInstruction($string) {

        $this->instructions[] = $string;
    }

    public function getInstructions() {

        return $this->instructions;
    }

    public function addTags($tag) {

        $this->tags[] = strtolower($tag);
    }

    public function getTags() {

        return $this->tags;
    }

    public function setYield($yield){

        $this->yield = $yield;
    }

    public function getYield() {

        return $this->yield;
    }

    public function setSource($source){

        $this->source = ucwords($source);
    }

    public function getSource() {

        return $this->source;
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

    public function getIngredients() {

        return $this->ingredients; 
    }
} 









