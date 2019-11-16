<?php
declare(strict_types=1);

namespace Brotkrueml\Extpagetitle\PageTitle;

/*
 * This file is part of the "extpagetitle" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider;

class ExtensionPageTitleProvider extends AbstractPageTitleProvider
{
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
