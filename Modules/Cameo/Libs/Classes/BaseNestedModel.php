<?php
namespace Modules\Cameo\Libs\Classes;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

abstract class BaseNestedModel extends Model{
    use NodeTrait;
    protected $primaryKey = 'id';
    public function getLftName()
    {
        return '_lft';
    }
    
    public function getRgtName()
    {
        return '_rgt';
    }
    
    public function getParentIdName()
    {
        return 'parent_id';
    }
    
    public function isParent(){
        return $this->parent_id == null ? true : false;
    }
    
    public function saveDatas(){
        if($this->isParent()){
           $this->makeRoot()->save();
        }else{
            $parent = $this->findParentById($this->parent_id);
            if($parent){
                $parent->appendNode($this);
            } 
        }
        return $this;
    }
    
    public function findParentById($id){
        return $this->where('id','=',$id)->find();
    }
}