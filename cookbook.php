<?php
include "classes/recipe.php";
include "classes/render.php";

$recipe1 = new Recipe();
// $recipe1->source = "Leonardo";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 1, "oz");

$recipe1->getIngredients();

$recipe2 = new Recipe();
$recipe2->setSource("Betty");
$recipe2->setTitle = "my second recipe";


$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");



$recipe1->addTags("Breakfast");
$recipe1->addTags("Main Course");

$recipe1->setYield("6 servings");

echo Render::displayRecipe($recipe1);




