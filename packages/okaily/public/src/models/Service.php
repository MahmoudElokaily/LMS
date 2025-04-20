<?php

namespace Elokaily\Public\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {
    protected $table = 'service';
    protected $hidden = ['created_at', 'updated_at' , 'deleted_at'];
}
