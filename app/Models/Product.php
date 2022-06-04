<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $guarded = [];

  /**
   * Get all of the carts for the Product
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function carts(): HasMany
  {
      return $this->hasMany(Cart::class);
  }
}
