<?php

declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\Event;

use Brotkrueml\Schema\Core\Model\TypeInterface;

/**
 * @internal
 */
final class InitialiseTypesEvent
{
    /**
     * @var TypeInterface[]
     */
    private array $types = [];

    public function addType(TypeInterface $type): void
    {
        $this->types[] = $type;
    }

    /**
     * @return TypeInterface[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }
}
