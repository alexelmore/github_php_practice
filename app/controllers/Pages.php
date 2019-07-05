<?php

class Pages
{
    public function __construct()
    { }

    public function index()
    { }

    public function about($id)
    {
        echo 'This is about and the id is ' . $id;
    }
}
