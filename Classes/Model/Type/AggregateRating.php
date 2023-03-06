<?php

declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\Model\Type;

use Brotkrueml\Schema\Attributes\Type;
use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * The average rating based on multiple ratings or reviews.
 */
#[Type('AggregateRating')]
final class AggregateRating extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'author',
        'bestRating',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'itemReviewed',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'ratingCount',
        'ratingValue',
        'reviewAspect',
        'reviewCount',
        'sameAs',
        'subjectOf',
        'url',
        'worstRating',
    ];
}
