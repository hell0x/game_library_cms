<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function res_msg($limit = [], $data)
    {
        if(empty($data))
        {
            echo json_encode(['code' => -1, 'msg' => 'No parameter']);
            exit;
        }else
            {
                foreach($limit as $v)
                {
                    if(!array_key_exists($v,$data))
                    {
                        $res['code'] = -1   ;
                        $res['msg'] = "parameter: '$v' not defined";
                        echo json_encode($res);
                        exit;
                    }
                }
            }
    }
}
