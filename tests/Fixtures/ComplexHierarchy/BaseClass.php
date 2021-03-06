<?php

/*
 * This file is part of the Rollerworks Metadata Component package.
 *
 * (c) Sebastiaan Stok <s.stok@rollerscapes.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Rollerworks\Component\Metadata\Tests\Fixtures\ComplexHierarchy;

abstract class BaseClass implements InterfaceA
{
    private $foo;

    public function getBar()
    {
    }
}
