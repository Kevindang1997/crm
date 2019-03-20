<?php
namespace Modules\Cameo\Libs\Classes;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model{
    protected $primaryKey = 'id';
}