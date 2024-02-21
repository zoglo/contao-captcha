<?php

declare(strict_types=1);

namespace Zoglo\ContaoCaptcha;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoCaptcha extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
