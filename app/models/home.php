<?php

class home
{
    public function __construct()
    {
        echo "this is home model";
    }

    public function category()
    {
        return $category = array(
            "cartOne" => "Điện thoại",
            "cartTwo" => "Tủ lạnh",
            "cartThree" => "Tivi",
        );
    }
}
