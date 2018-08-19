<?php
include "classes/recipe.php";

$recipe1 = new Recipe();
$recipe1->source = "Leonardo";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 1, "oz");



$recipe2 = new Recipe();
$recipe2->source = "Betty";
$recipe2->title = "My Second Recipe";

echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();
print_r($recipe1->ingredients) ;