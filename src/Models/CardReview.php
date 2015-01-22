<?php namespace Russ\Card\Models;

class Card extends Illuminate\Database\Eloquent\Model
{
	//public function getDueDateAttribute($attr) {
	
	//    return Carbon::parse($attr);//->format('d/m/Y - h:ia'); //Change the format to whichever you desire
	//}
	
	public function getDates()
	{
		return array('due_date','created_at');
	}

}
