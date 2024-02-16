<?php

function showNavCategories($categories, $parent_id = 0, $init = 0)
{
    $children = [];

    foreach ($categories as $key => $item) {
        if ($item->parent_id == $parent_id) {
            $children[] = $item;
            unset($categories[$key]);
        }
    }

    if ($children) {
        if ($init == 0) {
            echo "<nav><ul class='nav nav-pills nav-sidebar flex-column'>";
        } else {
            echo "<ul class='nav nav-treeview'>";
        }

        foreach ($children as $key => $item) {
            if ($init == 0) {
                echo "<li class='nav-item menu-open'>";
            } else {
                echo "<li class='nav-item ml-3 menu-open'>";
            }
            $r = route('admin.product.index', ['filter[category]' => $item->slug]);
            echo "<a class='nav-link' href='$r'><p> $item->name </p> </a>";
            showNavCategories($categories, $item->id, 1);
            echo '</li>';
        }

        echo '</ul>';
        if ($init == 0) {
            echo '</nav>';
        }
    }
}
