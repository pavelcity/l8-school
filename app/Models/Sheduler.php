<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Teacher;

class Sheduler extends Model
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
			'teacher_id',
			'title',
			'slug',
			'day',
			'time',
			'descr',
			'status',
		];



		public function teacher () {
			return $this->belongsTo(Teacher::class);
		}

}
