<?php
namespace App\Enums;


/**
 * Class PaymentStatus
 *
 * @package App\Enums
 */
enum PaymentStatus: string
{
    case Pending = 'pending';
    case Paid = 'paid';
    case Failed = 'failed';
}
