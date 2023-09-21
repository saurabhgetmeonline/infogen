<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_detail extends Model
{
    protected $fillable = [
        'name',
        'email',
        'company_name',
        'message',
        'country',
        'mobile',
        'payment_order_id',
        'transaction_id',
        'license_type',
        'report_view_slug',
        'report_category',
        'amount',
        'payment_status',
    ];
    use HasFactory;
}
