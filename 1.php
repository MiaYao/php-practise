<?php
class FileOwners
{
    public static function groupByOwners($files)
    {
        $names=array_unique($files);
        //print_r($names);
        $newArr=array();
        foreach($names as $name){
            echo $name;
            $arr=array();
            foreach($files as $key =>$value){
                if($value == $name){
                    array_push($arr,$key);
                }   
            };
            $newArr[$name]=$arr;
           
        };
        return $newArr;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));