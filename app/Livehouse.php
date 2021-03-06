<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Livehouse extends Model {

  protected $fillable = ["name", "email", "province_id", "capacitie_type", "price", "smoking_type", "test", "photo", "catchcopy", "homepage"];

  public function evaluations(){
		return $this->hasMany('App\Evaluation', 'livehouse_id');
	}

  public function province() {
    return $this->belongsTo("App\Province");
  }

  public function genres() {
    return  $this->belongsToMany("App\Genre")->withTimestamps();
  }

  public function scopeCreated($query) {
    $query->where("created_at", "<=", Carbon::now());
  }
}
