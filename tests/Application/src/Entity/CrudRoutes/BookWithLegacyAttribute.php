<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Entity\CrudRoutes;

use App\Entity\Book;
use JMS\Serializer\Annotation as Serializer;
use Sylius\Component\Resource\Annotation\SyliusCrudRoutes;

/**
 * @Serializer\ExclusionPolicy("all")
 */
#[SyliusCrudRoutes(
    alias: 'app.book',
    section: 'legacy_attribute',
)]
class BookWithLegacyAttribute extends Book
{
}
