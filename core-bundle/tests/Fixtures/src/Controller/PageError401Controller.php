<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Fixtures\Controller;

use Symfony\Component\HttpFoundation\Response;

class PageError401Controller
{
    public function getResponse()
    {
        return new Response('', 401);
    }
}
