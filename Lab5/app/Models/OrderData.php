<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

define('PATH_TO_JSON', '../storage/app/public/OrderData.json');
class OrderData extends Model
{
    use HasFactory;

    public function put($name, $phone, $street, $house, $flat, $comment="")
    {
        $record = array(
            "name"=>$name,
            "phone"=>$phone,
            "street"=>$street,
            "house"=>$house,
            "flat"=>$flat,
            "comment"=>$comment
        );
        $json = json_encode($record);
        file_put_contents(PATH_TO_JSON, $json);
    }
    public function getName(){
        $contents = file_get_contents(PATH_TO_JSON);
        $records = json_decode($contents, true);
        return $records['name'];
    }
}
