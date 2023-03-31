<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mountain extends Model
{
    use HasFactory;

    protected $table = 'mountain';
    protected $guarded = 'id';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [ 'user_id', 'name', 'thumbnail', 'description', 'address', 'price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
