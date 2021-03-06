<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Others extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['remark', 'created_by', 'updated_by'];

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
