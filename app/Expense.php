<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expense';

  /**
	 * Get Expense Data based on Year
  	*
  	* @param string
    * @return Expense
  	*/
    public function scopeYear($query, $year)
    {
        return $query->where('year', $year);
    }

  /**
	 * Get Expense Data based on Month
  	*
  	* @param string
    * @return Expense
  	*/
    public function scopeMonth($query, $month)
    {
        return $query->where('month', $month);
    }

  /**
	 * Get the Activity Date with specified date format
	 *
	 * @param integer
	 * @return string
	 */
    public function getActivityDateAttribute($value)
  	{
      	return date("d F Y", strtotime($value));
  	}

    /**
  	 * Get the Activity Time with specified date format
  	 *
  	 * @param integer
  	 * @return string
  	 */
      public function getActivityTimeAttribute($value)
    	{
        	return date("H:i:s", strtotime($value));
    	}

    /**
	 * Get the Created At with specified date format
	 *
	 * @param integer
	 * @return string
	 */
    public function getCreatedAtAttribute($value)
  	{
      	return date("d F Y H:i:s", strtotime($value));
  	}

    /**
	 * Get the Created By with specified name based on User ID
	 *
	 * @return string
	 */
    public function getCreatedByAttribute($value)
  	{
        return User::find($value)->name;
  	}

	/**
	 * Get the Updated At with specified date format
	 *
	 * @param integer
	 * @return string
	 */
    public function getUpdatedAtAttribute($value)
  	{
      	return date("d F Y H:i:s", strtotime($value));
  	}

    /**
	 * Get the Updated By with specified name based on User ID
	 *
	 * @return string
	 */
    public function getUpdatedByAttribute($value)
  	{
        return User::find($value)->name;
  	}
}
