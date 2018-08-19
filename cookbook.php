<?php
include "classes/recipe.php";

$recipe1 = new Recipe();
// $recipe1->source = "Leonardo";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 1, "oz");



$recipe2 = new Recipe();
// $recipe2->source = "Betty";
$recipe2->setTitle = "my second recipe";

echo $recipe1->getTitle();
foreach ($recipe1->getIngredients() as $ing) {
    echo "\n" . $ing["amount"] . " " .  $ing["measure"] . " " .  $ing["item"]; 
}

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

echo implode("\n", $recipe1->getInstructions());

$recipe1->addTags("Breakfast");
$recipe1->addTags("Main Course");

echo implode(",", $recipe1->getTags());






// $recipe1->getInstructions();


// echo $recipe1->displayRecipe();
// echo $recipe2->displayRecipe();
// print_r($recipe1->ingredients) ;

