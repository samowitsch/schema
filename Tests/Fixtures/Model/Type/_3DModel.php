<?php

declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\Tests\Fixtures\Model\Type;

use Brotkrueml\Schema\Core\Model\AbstractType;

class _3DModel extends AbstractType
{
    /**
     * @var string[]
     */
    protected static array $propertyNames = [
        'name',
    ];
}
