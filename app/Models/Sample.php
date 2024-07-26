 
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = 'samples';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
    use HasFactory;
}
