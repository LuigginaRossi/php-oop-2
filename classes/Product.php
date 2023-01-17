<?php
include_once __DIR__ ."/Category.php";
class Product {
    protected string $img;
    protected string $productName;
    protected float $price;
    protected bool $available;
    protected $category;

    function __construct($_img, $_productName, $_price, $available = null, Category $category)
    {
        $this->setImg($_img);
        $this->setProductName($_productName);
        $this->setPrice($_price);
        $this->setAvailable($available);
        $this->setCategory($category);
    }

    // -----

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }


    // -----


    /**
     * Get the value of productName
     */ 
    public function getProductName()
    {
        return ucwords($this->productName);
    }

    /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    // -----

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return number_format($this->price,2, ',');
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    // -----

    /**
     * Get the value of available
     */ 
    public function getAvailable()
    {
        if($this->available === true){
            return "available ";
        }else{
            return "coming soon";
        }
    }

    /**
     * Set the value of available
     *
     * @return  self
     */ 
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    // -----

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        $category= [
            "name"=>$this->category->getCategoryName(),
            "icon"=>'<i class="fa-solid '. $this->category->getCategoryIcon().'"></i>',
        ];
        return $category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}