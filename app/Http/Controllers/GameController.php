<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/3/28
 * Time: 10:12
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class GameController extends Controller
{

    private $game = 'spider_v2_game:';
    private $game_reverse = 'spider_v2_game_reverse:';

    public function get_list(Request $request)
    {
        $data = $request->input();
        $this->res_msg(['field'], $data);
        $res = [];
        $result = Redis::keys($this->game_reverse.$data['field'].':*');
        foreach($result as $key => $val){
            $res[$key]['name'] = Redis::get($val);
            $res[$key]['val'] = str_replace($this->game_reverse.$data['field'].':', '', $val);
        }
        echo json_encode(['code'=>1, 'list'=>$res]);
    }

    public function get_field(Request $request)
    {
        $data = $request->input();
        $this->res_msg(['field', 'search'], $data);
        $search = $this->game.$data['field'].':'.$data['search'].'*';
        $res = Redis::keys($search);
        $code = -1;
        if(!empty($res)){
            $code = 1;
            foreach($res as &$val){
                $val = str_replace($this->game.$data['field'].':', '', $val);
            }
        }
        echo json_encode(['code'=>$code, 'list'=>$res]);
    }


}