<?php
namespace Cadd\Model;

use Cadd\Model\Inner;
use Aloha\Model\AlohaModel;

class School extends AlohaModel
{
    protected $table = "school";

    public function inner(){
        return $this->hasMany(Inner::class)->orderBy("id");
    }

}