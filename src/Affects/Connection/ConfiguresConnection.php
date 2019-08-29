<?php

declare(strict_types=1);

/*
 * This file is part of the tenancy/tenancy package.
 *
 * Copyright Tenancy for Laravel & Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://tenancy.dev
 * @see https://github.com/tenancy
 */

namespace Tenancy\Affects\Connection;

use Tenancy\Affects\Affect;
use Tenancy\Affects\Connection\Contracts\ResolvesConnections;

class ConfiguresConnection extends Affect
{
    public function fire(): void
    {
        $resolver = resolve(ResolvesConnections::class);
        $resolver->__invoke($this->event->tenant);
    }
}
