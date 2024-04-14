<?php
namespace App\Enums;


/**
 * Class AddressType
 *
 * @package App\Enums
 */
enum AddressType: string
{
    case Shipping = 'shipping';
    case Billing = 'billing';
}
