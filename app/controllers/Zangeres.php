<?php

class Zangeres extends BaseController
{
    private $zangeresModel;

    public function __construct()
    {
        
        $this->zangeresModel = $this->model('ZangeresModel');
    }

    public function index()
    {
    
        $results = $this->zangeresModel->getAllZangeressen();
        
        $data = [
            'title' => 'Zangeressen',
            'zangeressen' => $results
        ];

      
        $this->view('zangeres/index', $data);
    }
}
