<?php


class Render
{


    //quando tiver um loop dentro de um metodo , passar para outro metodo

    public static function listIngredients($ingredients) {

        $output = "";
        foreach ($ingredients as $ing) {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
            $output .= "\n";
            return $output;
        }

    }

    public static function displayRecipe($recipe) {

        $output = "";
        $output .=  $recipe->getTitle() . "by " . $recipe->getSource();
        $output .= "\n";   
        $output .= implode(", ",$recipe->getTags()) ;   
        $output .= "\n\n";   
        // ingredients
        $output .= self::listIngredients($recipe->getIngredients());
        $output .= "\n";
        $output .= implode("\n", $recipe->getInstructions());   
        $output .= "\n";
        $output .= $recipe->getYield();
        // $output .= "\n";
        // $output .= "\n";
        return $output;

    }

}

