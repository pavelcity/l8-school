<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Contact extends Model
{
    use HasFactory;
		use Sluggable;

		public function sluggable(): array
		{
			return [
				'slug' => [
					'source' => 'title'
				]
			];
		} 



		protected $fillable = [
			'title',
			'slug',
			'adres',
			'phone',
			'email',
			'map',
		];
		
}
