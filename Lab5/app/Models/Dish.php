<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

define('JSON_PATH', '../storage/app/public/Dishes.json');

class Dish extends Model
{
    use HasFactory;
    private $data;

    public function __construct(){
        $this->data = $this->readJson();
    }
    public function readJson(){
        $contents = file_get_contents(JSON_PATH);
        $dishes = json_decode($contents, true);
        if (is_null($dishes)) return [];
        return $dishes;
    }

    public function getDataBiId($id){
        foreach ($this->data as $record){
            if ($record['id'] == $id){
                return $record;
            }
        }
        return null;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData(mixed $data): void
    {
        $this->data = $data;
    }

    public function printDish(){
        return "$this->name, $this->price";
    }

}
