<?php
  class Pages extends Controller
   {
    public function __construct()
    {
    /*   echo 'Pages loaded'; */
    }

    public function index()
    {
      $data = [
        'title' => 'welcome'
      ];
      return $this->view('pages/index', $data);
    }


    public function about()
    {
      return $this->view('pages/about');
    }

  }