<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioritytype extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // One to Many relation for complaints
    public function complaints()
    {
        return $this->hasMany(Complaint::class, 'prioritytype_id');
    }
}
