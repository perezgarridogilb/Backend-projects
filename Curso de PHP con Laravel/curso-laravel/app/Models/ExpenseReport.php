<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    public function expenses() {
        /* Tiene muchos gastos */
        return $this->hasMany(Expense::class);
    }
}
