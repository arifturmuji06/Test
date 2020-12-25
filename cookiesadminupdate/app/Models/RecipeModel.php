<?php

namespace App\Models;

use CodeIgniter\Model;

class RecipeModel extends Model
{
    protected $table      = 'recipes';
    protected $primaryKey = 'recipe_id';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'title', 'serving', 'duration', 'ingredients', 'steps', 'slug'];

    public function getRecipe($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
