<?php


namespace App\classes;


class Blog
{
    public $blogs = [];

    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id' => 1,
                'title' => 'This is blog title one',
                'description' => 'This is blog title one description',
                'image' => 'assets/img/2.jpg',
            ],
            1 => [
                'id' => 2,
                'title' => 'This is blog title two',
                'description' => 'This is blog title two description',
                'image' => 'assets/img/3.jpg',
            ],
            2 => [
                'id' => 3,
                'title' => 'This is blog title three',
                'description' => 'This is blog title three description',
                'image' => 'assets/img/4.jpg',
            ]
        ];
    }

    public function getAllBlogData()
    {
        return $this->blogs;
    }

    public function getBlogById($id)
    {
        foreach ($this->blogs as $datum) {
            if ($datum['id'] == $id) {
                return $datum;
            }
        }
    }

}