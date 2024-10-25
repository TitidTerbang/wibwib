<?php

namespace Controller;

include "../traits/ResponseFormatter.php";
include "Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller{
    use ResponseFormatter;

    public function __construct()
    {
        $this->controllerName = "Get All Products";
        $this->controllerMethod = "GET";
    }

    public function getAllProduct(): false|string
    {
        $dummyData = [
            "Air Mineral",
            "Teh Botol",
            "Kopi Kapal Api",
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "products" => $dummyData
        ];

        return $this->responseFormatter(200, "Success", $response);
    }
}

?>