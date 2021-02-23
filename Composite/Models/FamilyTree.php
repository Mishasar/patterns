<?php

namespace App\Models;

class FamilyTree extends Tree
{
    /**
     * @var Tree[]
     */
    private $children = array();

    public function add(Tree $tree)
    {
        $this->children[$tree->name] = $tree;
    }

    public function remove(Tree $tree)
    {
        unset($this->children[$tree->name]);
    }

    public function view(string $padding = '')
    {
        foreach ($this->children as $child) {
            $child->view($padding . '----');
        }
    }
}
