<?php
declare(strict_types=1);

namespace Brotkrueml\Extpagetitle\Tests\Unit\PageTitle;

use Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider;
use PHPUnit\Framework\TestCase;

class ExtensionPageTitleProviderTest extends TestCase
{
    public function testSetTitle(): void
    {
        /** @var ExtensionPageTitleProvider $provider */
        $provider = new ExtensionPageTitleProvider();
        $provider->setTitle('Test title');

        $this->assertEquals('Test title', $provider->getTitle());
    }
}
