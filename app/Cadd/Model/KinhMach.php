<?php

namespace Cadd\Model;

use Cadd\Model\School;
use Aloha\Model\AlohaModel;
use Cadd\Model\KinhMachDetail;

class KinhMach extends AlohaModel
{
    protected $table = "kinh_mach";

    public function detail()
    {
        return $this->hasMany(KinhMachDetail::class);
    }

    public function school(){
        return $this->belongsTo(School::class);
    }
}
