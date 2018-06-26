<?php
/**
 * Created by PhpStorm.
 * User: temp
 * Date: 2018/5/15
 * Time: 14:00
 */

namespace config;

class Config
{
    public function returnConfig()
    {
        return [
            'app_name' => 'sinte洗护',
        ];

    }

/**
 * @api {post} /api/user/user [用户中心首页]
 * @apiParam user integer username 用户名
 * [user description]
 * @return [type]           [description]
 */
    public function user($username ,$password){

    }

}
