<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/3/28
 * Time: 10:12
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;
use App\SourceConfig;

class SourceConfigController extends Controller
{

    public function list()
    {
        $res = [];
        $sourceconfig = SourceConfig::all();
        $res['code'] = 1;
        $res['list'] = $sourceconfig;
        echo json_encode($res);
    }

    public function get_sources()
    {
//        $result = Redis::get('spider_v2_game_reverse:category:2');
        $values = Redis::keys('spider_v2_game_reverse*');
        dd($values);
    }
}