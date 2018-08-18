<?php

class Recipe
{
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();

    public $source = "Leonardo Carvalho";

 
} 

$recipe1 = new Recipe();

echo $recipe1->source;

$recipe1->source = "Agora sou The Fuck God";

echo $recipe1->source;






