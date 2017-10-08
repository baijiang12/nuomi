<?php
namespace app\common\model;

use think\Model;

class Order extends Model
{
    protected $autoWriteTimestamp = true;//database.php 第四十八行
    public function add($data){
        $data['status'] = 1;
        $data['create_time'] = time();
        return $this->save($data);
    }


}