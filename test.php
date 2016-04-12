<?php
/**
 * User: Aaron
 * Date: 4/12/16
 * Time: 4:43 PM
 */

require 'vendor/autoload.php';

use Aaron\Alipay\Alipay as alipay;
use Aaron\Alipay\Wap\Payment as wap;

echo alipay::info();
echo wap::info();