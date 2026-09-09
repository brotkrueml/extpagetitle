<?php

declare (strict_types=1);

use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

$header = <<<HEADER
This file is part of the "extpagetitle" extension for TYPO3 CMS.

For the full copyright and license information, please read the
LICENSE file that was distributed with this source code.
HEADER;

return ECSConfig::configure()
    ->withSets([
        __DIR__ . '/.Build/vendor/brotkrueml/coding-standards/config/common.php',
    ])
    ->withParallel()
    ->withPaths([
        __DIR__ . '/Classes',
        __DIR__ . '/Tests',
    ])
    ->withConfiguredRule(
        HeaderCommentFixer::class,
        [
            'comment_type' => 'comment',
            'header' => $header,
            'separate' => 'both',
        ],
    );
