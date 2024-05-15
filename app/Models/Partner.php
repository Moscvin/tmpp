<?php

namespace App\Models;

use App\Traits\Active;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Traits\Tappable;

class Partner extends Model
{
    use Active;
    use Tappable;
}
