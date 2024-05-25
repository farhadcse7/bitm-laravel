<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public $x;
    public $y;
    public $z;
    public $data = [];

    public $firstName = "Rofik";
    public $lastName = "Khan";
    public $products = [];

    public function __construct()
    {
        $this->message = "Hello World Farhad";
    }

    public function index()
    {
//        return view('home');
//        echo $this->message;
//        $this->data =[10, 20, 30, 'Basis', 'bitm', 10.25, true];
//        echo $this->data[4];

//        foreach ($this->data as $index=> $item){
//            echo $index.' '.$item.'<br> ';
//        }

//        $this->product = [
//            'name' => 'Football',
//            'price' => 1500,
//            'description' => 'Nice football'];
//        echo $this->product['name'];

        $this->products = [
            0 => [
                'name' => 'Football',
                'price' => [
                    'regular_price' => 4500,
                    'selling_price' => 4000,
                ],
                'description' => 'Nice football',
                'image' => 'football.jpg'
            ],
            1 => [
                'name' => 'T Shirt',
                'price' => [
                    'regular_price' => 3500,
                    'selling_price' => 3000,
                ],
                'description' => 'Nice T Shirt',
                'image' => 'shirt.jpg'
            ],
            2 => [
                'name' => 'Mobile',
                'price' => [
                    'regular_price' => 55500,
                    'selling_price' => 485000,
                ],
                'description' => 'Nice Mobile',
                'image' => 'mobile.jpg'
            ],
        ];

        $name = "bitm";

        return view('home', ['products' => $this->products, 'a' => $name]);


//        foreach ($this->products as $product) {
////            echo $product['name'].' '.$product['price'].' '.$product['description'].' <br>';
//
//            foreach ($product as $item) {
//                if (is_array($item)){
//                    foreach ($item as $value){
//                        echo $value.' ';
//                    }
//                }else
//                echo $item . ' ';
//            }
//            echo '<br>';
//        }


    }

}