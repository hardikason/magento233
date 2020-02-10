<?php
namespace Neo\CustomApi\Api;

/*
Interface ProductRepositoryInterface
*/
interface ProductRepositoryInterface
{
    /**
     * @api
     * @param string $sku
     * @return string
     */
    public function getproductinfo($sku);


    /**
     * @api
     * @param string[] $products
     * @return array
     */
    public function updateProductInfo($products);
}