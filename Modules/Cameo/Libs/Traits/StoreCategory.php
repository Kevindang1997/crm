<?php
namespace Modules\Cameo\Libs\Traits;
trait StoreCategory{
    public function storeAsRoot($attrs){
        $node = new $this($attrs);
        return $node->save();
    }
}