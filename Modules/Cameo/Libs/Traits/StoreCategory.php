<?php
namespace Modules\Cameo\Libs\Traits;
trait StoreCategory{
    public function getAllCategoriesWithDepth(){
        return $this->orderBy($this->getLftName(),'asc')->withDepth()->get();
    }
    
    public function getArrayWithFormatLabel(){
        $allList = $this->getAllCategoriesWithDepth();
        $array = [];
        foreach($allList as $key => $value){
            $array[$value->id] = str_repeat('---|', $value->depth).' '.$value->title;
        }
        return $array;
    }
}