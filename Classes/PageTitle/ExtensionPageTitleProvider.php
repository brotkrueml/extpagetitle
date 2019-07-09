<?php

declare(strict_types=1);

namespace Brotkrueml\Extpagetitle\PageTitle;

use TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider;

class ExtensionPageTitleProvider extends AbstractPageTitleProvider
{
    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
