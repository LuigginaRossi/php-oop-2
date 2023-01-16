<?php
require_once __DIR__ . "/Category.php";

class Color extends Category{
    private string $color;
    
    function __construct($_categoryName, $_categoryIcon, $_color)
    {
        parent::__construct($_categoryName, $_categoryIcon);
        $this->setColor($_color);
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        if($this->categoryName === "cat"){
            return "text-info";
        }else{
            return "text-warning";
        }
    }
}

