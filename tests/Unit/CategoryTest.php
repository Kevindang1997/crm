<?php
namespace Tests\Unit;

use Tests\TestCase;

use Modules\Cameo\Models\CategoryModel;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    use WithFaker;

    public function testCreateCategory()
    {
        $category = new CategoryModel();
        $category->title = $this->faker->text(30);
        $category->description = $this->faker->text();
        $category->content = $this->faker->text();
        $category->save();
        //Test save root
        $this->assertIsNumeric($category->id);
        
        $child = new CategoryModel();
        $child->title = $this->faker->text(30);
        $child->description = $this->faker->text();
        $child->content = $this->faker->text();
        $child->parent_id = $category->id;
        $child->save();
        
        //Test save child
        $this->assertIsNumeric($child->id);
        //Test not parent
        $this->assertFalse($child->isParent());
   
    }
}
