<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ ."/Product.php";

class Game extends Product{
    private array $materials;    
    
    function __construct($_img, $_productName, $_price, $available = null, Category $_category, $_materials)
    {
        parent::__construct($_img, $_productName, $_price, $available, $_category);
        $this->setMaterials($_materials);
    }

    /**
     * Get the value of materials
     */ 
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set the value of materials
     *
     * @return  self
     */ 
    public function setMaterials($materials)
    {
        $this->materials = $materials;

        return $this;
    }
}