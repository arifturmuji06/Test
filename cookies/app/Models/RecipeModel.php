<?php

namespace App\Models;

use CodeIgniter\Model;

class RecipeModel extends Model
{
    protected $table      = 'recipes';
    protected $primaryKey = 'recipe_id';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'title', 'recipe_image', 'recipe_desc', 'serving', 'duration', 'ingredients', 'steps', 'slug'];

    public function getRecipe($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }



    public function search($keyword)
    {
        return $this->table('recipes')->like('title', $keyword)->orLike('ingredients', $keyword);
    }
}
