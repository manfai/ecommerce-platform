<?php 

if (!function_exists('index')) {

    /**
     * users->user_id->order_id
     * "users" => array:1 [▼
     *      1 => array:1 [▼
     *      "order" => "orders.1.1568602450"
     *      ]
     *  ]
     *  "orders" => array:1 [▼
     *      1 => array:1 [▼
     *      1568602450 => array:3 [▼
     *          "_token" => "HH65NRoaNFOZYrW2p4Y6IsIF7gIj864csgN41Mug"
     *          "step" => "products"
     *          "items" => array:1 [▼
     *          0 => array:2 [▼
     *              "sku_id" => "97"
     *              "qty" => "1"
     *          ]
     *          ]
     *      ]
     *      ]
     *  ]
     */
    function orderSessionCreate($userId, $data){
        $userOrder = 'users.'.$userId.'.order';
        $orderId = 'orders.'.$userId.'.'.now()->timestamp;
        Session::put($userOrder, $orderId);
        Session::put($orderId, $data);
        return true;
    }

    function orderSessionMerge($userId,$data){
        $orderNo = Session::get('users.'.$userId.'.order');
        $oldData = Session::get($orderNo);
        $newData = $data;
        Session::put($orderNo,array_merge($oldData, $newData));
        return true;
    }
    
    function orderSessionData($userId){
        $orderNo = Session::get('users.'.$userId.'.order');
        $data = Session::get($orderNo);
        return $data?(object)$data:false;
    }
}