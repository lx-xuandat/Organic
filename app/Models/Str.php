<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Str
 * 
 * @property int $string_id
 * @property string|null $string_data
 *
 * @package App\Models
 */
class Str extends Model
{
	protected $table = 'strings';
	protected $primaryKey = 'string_id';
	public $timestamps = false;

	protected $fillable = [
		'string_data'
	];
}
