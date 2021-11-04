<?php

declare(strict_types=1);

/*
 * This file is part of the "extpagetitle" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Brotkrueml\Extpagetitle\Tests\Unit\PageTitle;

use Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider;
use PHPUnit\Framework\TestCase;

class ExtensionPageTitleProviderTest extends TestCase
{
    /**
     * @test
     */
    public function setTitle(): void
    {
        /** @var ExtensionPageTitleProvider $provider */
        $provider = new ExtensionPageTitleProvider();
        $provider->setTitle('Test title');

        self::assertSame('Test title', $provider->getTitle());
    }
}
