<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QA {
    public $id;
    public $question;
    public $anserw;

    public function __construct($question,$anserw) {
        $this->question = $question;
        $this->anserw = $anserw;
    }
}