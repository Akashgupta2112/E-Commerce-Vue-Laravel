<?php
namespace App\Enums;


/**
 * Class CustomerStatus
 *
 * @package App\Enums
 */
enum CustomerStatus: string
{
    case Active = 'active';
    case Disabled = 'disabled';
}
