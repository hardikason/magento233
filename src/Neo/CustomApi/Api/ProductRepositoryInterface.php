<?php
namespace Neo\CustomApi\Api;
interface ProductRepositoryInterface
{
    /**
     * @api
     * @param string $sku
     * @return string
     */
    public function getproductinfo($sku);
}