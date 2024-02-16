<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $with = ['children'];
    protected $casts = [
		'parent_id' => 'int',
	];

    protected $fillable = [
		'name',
		'slug',
		'description',
        'pictures',
		'meta_title',
		'meta_description',
		'parent_id'
	];

    public function parent()
	{
		return $this->belongsTo(Category::class, 'parent_id');
	}

    /**
     * Get all of the children for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
