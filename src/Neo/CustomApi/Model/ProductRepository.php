<?php
namespace Neo\CustomApi\Model;

use Neo\CustomApi\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\ProductFactory;


/*
Class ProductRepository 
*/
class ProductRepository implements ProductRepositoryInterface
{
    protected $productFactory;
    public function __construct(
        ProductFactory $productFactory
    ) {
        $this->productFactory = $productFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getproductinfo($sku){
    	$productId = $this->productFactory->create()->getIdBySku($sku);
    	if(!$productId){
    		return ["code" => '301', "message" => "SKU " . $sku . " not found in database."];
    	}else{
    		$ary_response = [];
    		if(is_numeric($productId)){
    			$valid = [
	                "code" => "200",
	                "sku" => $sku,
	                "product_id" => $productId
	            ];
	            $ary_response[] = $valid;
    		}else{
    			$ary_response[] = $productId;
    		}
    		return $ary_response;
    	}

    }

    /*
    * {@inheritdoc}
    */
    public function updateProductInfo($products){
        print_r($products);
        foreach ($products as $product) {
         //   echo $product['sku'];
        }
        
    }
}
