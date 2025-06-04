<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // App\Models\Image.php

public function imageable()
{
    return $this->morphTo();
}

}
