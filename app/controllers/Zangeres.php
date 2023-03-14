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
        $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld'
        ];

        $this->view('country/index', $data);
    }


    public function getZangeressen($id1=NULL, $id2=NULL) 
    {
        $zangeressen = $this->zangeresModel->getZangeressen();

        $tableRows = "";
        foreach ($zangeressen as $value) {
            $tableRows .= "<tr>
                                <td>$value->Id</td>
                                <td>$value->Name</td>
                           </tr>";
        }

        $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld',
            'tableRows' => $tableRows
        ];

        $this->view('zangeres/getZangeressen', $data);
    }
}