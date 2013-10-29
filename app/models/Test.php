<?php

class Test extends Eloquent {
  protected $table = 'test';
  protected $guarded = array('id');
  public $validator;

  public $rules = array(
    'name' => 'Required|Min:3|Alpha'
  );

  public static function boot() {
    parent::boot();

    //Add in saving hook to prevent database being saved
    Test::saving(function ($model) {
      $model->validator = Validator::make($model->toArray(), $model->rules);

      return $model->validator->passes();
    });
  }

}