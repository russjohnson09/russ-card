<?php namespace Russ\Card\Models;

use Illuminate\Database\Eloquent\Model;
	
class Card extends Model
{
	public function reviews()
	{
		return $this->hasMany('CardReview');
	}
	
	public function getDueAttribute()
	{
		$pastReview = CardReview::where('card_id',$this->id)->orderBy('created_at','desc')->first();
		if (empty($pastReview)) {
			return true;
		}
		return $pastReview->due_date->isPast();
		//return $pastReview->due_date->lt(Carbon::now());
	}
}