<?php

namespace Brotkrueml\Extpagetitle\Tests\Unit\PageTitle;

use Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider;

class ExtensionPageTitleProviderTest extends \PHPUnit\Framework\TestCase
{
    public function testSetTitle(): void
    {
        /** @var ExtensionPageTitleProvider $provider */
        $provider = new ExtensionPageTitleProvider();
        $provider->setTitle('Test title');

        $this->assertEquals('Test title', $provider->getTitle());
    }
}
