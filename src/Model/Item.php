<?php

/**
 * @author Sohrab Khan
 * @copyright 2015 Sohrab Khan
 * @version 0.1
 */
class Item {
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $imageUrl;
    /**
     * @var \DateTime
     */
    private $expiresAt;
    /**
     * @var float
     */
    private $price;
    /**
     * @var float
     */
    private $offerPrice;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @param DateTime $expiresAt
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getOfferPrice()
    {
        return $this->offerPrice;
    }

    /**
     * @param float $offerPrice
     */
    public function setOfferPrice($offerPrice)
    {
        $this->offerPrice = $offerPrice;
    }

    public function __toString()
    {
        return $this->title . ", " . $this->price;
    }
}