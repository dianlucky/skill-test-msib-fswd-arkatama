<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BiodataModel;
use CodeIgniter\HTTP\ResponseInterface;

class BiodataController extends BaseController
{
    public $biodataModel;
    public function __construct()
    {
        $this->biodataModel = new BiodataModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Study case MSIB',
        ];

        return view('index', $data);
    }

    public function save()
    {
        $data = $this->request->getVar();

        $dataString = explode(' ', $data['data']);
        $name = null;
        $age = null;
        $city = null;

        //Mengambil data nama
        foreach ($dataString as $index => $ds) {
            if (is_numeric($ds)) {
                $indexAge = $index;
                break;
            }
            $name .= $ds . ' ';
        }

        //Mengambil data umur
        if (in_array($dataString[$index + 1], ['TAHUN', 'THN', 'TH'])) {
            $age = $dataString[$index] . ' ' .  $dataString[$index + 1];
            for ($i = $index + 2; $i < count($dataString); $i++) {
                $city .= $dataString[$i] . ' ';
            }
        } else {
            $age = $dataString[$index];
            for ($i = $index + 1; $i < count($dataString); $i++) {
                $city .= $dataString[$i] . ' ';
            }
        }

        $insert = $this->biodataModel->insert([
            'id' => '',
            'name' =>  trim($name),
            'age' => trim($age),
            'city' => trim($city),
        ]);

        if ($insert) {
            echo "Berhasil";

            return redirect()->to('/');
        }


        // dd($name, $age, $city);
    }
}
