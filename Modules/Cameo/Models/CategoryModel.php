<?php
namespace Modules\Cameo\Models;
use Modules\Cameo\Libs\Classes\BaseNestedModel;

class CategoryModel extends BaseNestedModel{
    protected $table = 'category';
    protected $fillable = ['title','description','content'];
    
}