<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = ['method']; // الخصائص المطلوبة

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}