<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/3/28
 * Time: 10:12
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\GameModify;

class GameModifyController extends Controller
{

    public function list(){
//        $gamemodify = GameModify::all();
        $result = GameModify::paginate(10);
        dd($result);
    }
}