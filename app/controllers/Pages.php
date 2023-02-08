<?php
  class Pages extends Controller
   {
    public function __construct()
    {
    /*   echo 'Pages loaded'; */
    }

    public function index()
    {
      return $this->view('hello');
    }


    public function about($id)
    {
      echo $id;
    }

  }