<?php
namespace Cadd\Model;

use Cadd\Model\School;
use Aloha\Model\AlohaModel;
use Cadd\Model\InnerDetail;

class Inner extends AlohaModel
{
    protected $table = "inner";

    public function detail(){
        return $this->hasMany(InnerDetail::class);
    }

    public function school(){
        return $this->belongsTo(School::class);
    }

}