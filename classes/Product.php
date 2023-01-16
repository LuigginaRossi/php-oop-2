<?php
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
class Product {
    protected string $img;
    protected string $productName;
    protected float $price;
    protected bool $available;

    function __construct($_img, $_productName, $_price, $available = null)
    {
        $this->setImg($_img);
        $this->setProductName($_productName);
        $this->setPrice($_price);
        $this->setAvailable($available);
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
        return $this->available;
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
}