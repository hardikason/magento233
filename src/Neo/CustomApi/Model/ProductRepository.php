<?php
namespace Neo\CustomApi\Model;
//use Neo\CustomApi\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\ProductFactory;
class ProductRepository implements ProductRepositoryInterface
{
    protected $productFactory;
    public function __construct(
        ProductFactory $productFactory
    ) {
        $this->productFactory = $productFactory;
    }

    public function getproductinfo($sku){
        return $sku;
        /*$ary_response = json_encode(['sku'=>$sku]);
        return $ary_response;*/
    	/*$productId = $this->productFactory->create()->getIdBySku($sku);
    	//print_r($productId);die;
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
	            //print_r($ary_response);die;
    		}else{
    			$ary_response[] = $productId;
    		}
    		return $ary_response;
    	}*/

    }
}
