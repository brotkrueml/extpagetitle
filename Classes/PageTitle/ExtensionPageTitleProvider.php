<?php

declare(strict_types=1);

/*
 * This file is part of the "extpagetitle" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Brotkrueml\Extpagetitle\PageTitle;

use TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider;

class ExtensionPageTitleProvider extends AbstractPageTitleProvider
{
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
