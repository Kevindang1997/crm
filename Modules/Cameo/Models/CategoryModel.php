<?php
namespace Modules\Cameo\Models;
use Modules\Cameo\Libs\Classes\BaseNestedModel;
use Modules\Cameo\Libs\Traits\StoreCategory;

class CategoryModel extends BaseNestedModel{
    use StoreCategory;
    protected $table = 'category';
    protected $fillable = ['title','description','content'];
    public function setAllAttribute($datas = []){
        $this->title = $datas['title'];
        $this->parent_id = $datas['parent_id'];
    }
}