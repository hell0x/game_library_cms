<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/3/27
 * Time: 10:16
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{

    protected $table = 'users';

    public $timestamps = false;
}