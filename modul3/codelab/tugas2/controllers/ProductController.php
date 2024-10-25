<?php

namespace Controller;

include "Controller.php";

require_once __DIR__ . '/../traits/ResponseFormatter.php';
require_once __DIR__ . '/Controller.php';

use traits\ResponseFormatter;

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