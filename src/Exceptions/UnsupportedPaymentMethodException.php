<?php

namespace Rennokki\Plans\Exceptions;

use Exception;

class UnsupportedPaymentMethodException extends Exception
{
    protected $message = null;
}