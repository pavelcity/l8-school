<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Student extends Model
{
    use HasFactory;
		use Sluggable;

		public function sluggable(): array
		{
			return [
				'slug' => [
					'source' => 'name'
				]
			];
		}  


		protected $fillable = [
			'name',
			'slug',
			'email',
			'phone',
			'password',
			'avatar',
			'order'
		];

}
