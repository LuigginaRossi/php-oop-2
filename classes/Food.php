<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ ."/Product.php";

class Food extends Product{
    private string $typology;
    private array $ingredients;    
    
    function __construct($_img, $_productName, $_price, $available = null, Category $_category, $_typology, $_ingredients)
    {
        parent::__construct($_img, $_productName, $_price, $available = null, $_category);
        $this->setTypology($_typology);
        $this->setIngredients($_ingredients);
    }

    /**
     * Get the value of typology
     */ 
    public function getTypology()
    {
        return $this->typology;
    }

    /**
     * Set the value of typology
     *
     * @return  self
     */ 
    public function setTypology($typology)
    {
        $this->typology = $typology;

        return $this;
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}