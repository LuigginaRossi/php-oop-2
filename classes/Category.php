<?php

// I prodotti sono categorizzati, le categorie sono Cani o Gatti.
require_once __DIR__ . "/Product.php";

class Category extends Product{
    protected string $categoryName;
    protected $categoryIcon;

    function __construct($_categoryName)
    {
        //invoco parametri della classe prodotto
        parent::__construct($this->productName, $this->price, $_categoryName);
        $this->setCategoryName($_categoryName);
    }

    /**
     * Get the value of categoryName
     */ 
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set the value of categoryName
     *
     * @return  self
     */ 
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get the value of categoryIcon
     */ 
    public function getCategoryIcon()
    {
        return $this->categoryIcon;
    }

    /**
     * Set the value of categoryIcon
     *
     * @return  self
     */ 
    public function setCategoryIcon($categoryIcon)
    {
        $this->categoryIcon = $categoryIcon;

        return $this;
    }
}