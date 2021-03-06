<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Sheduler;

class Teacher extends Model
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
			'sheduler_id',
			'phone',
			'email',
			'tema',
			'password',
		];




		public function shedulers () {
			return $this->hasMany(Sheduler::class);
		}



}
