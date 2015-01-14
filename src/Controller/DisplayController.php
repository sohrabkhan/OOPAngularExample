<?php

/**
 * @author Sohrab Khan
 * @copyright 2015 Sohrab Khan
 * @version 0.1
 */
class DisplayController
{
    const API_URL = "http://flubit-product-data.herokuapp.com/products.json";

    /**
     *
     */
    public function displayAction()
    {
        $content = file_get_contents(static::API_URL);
        $jsonContent = json_decode($content, true);
        $itemsList = array();
        foreach($jsonContent as $json) {
            $item = new Item();
            $item->setTitle($json['title']);
            $item->setImageUrl($json['image_url']);
            $item->setExpiresAt(new \DateTime($json['expires_at']));
            $item->setPrice($json['price']);
            $item->setOfferPrice($json['offer_price']);
            $itemsList[] = $item;
        }

        require_once "src/View/display_items.html.php";
    }
}