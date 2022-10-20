<?php

declare (strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $config): void {
    $header = <<<HEADER
This file is part of the "extpagetitle" extension for TYPO3 CMS.

For the full copyright and license information, please read the
LICENSE file that was distributed with this source code.
HEADER;

    $config->import(__DIR__ . '/.Build/vendor/brotkrueml/coding-standards/config/common.php');

    $config->paths([
        __DIR__ . '/Classes',
        __DIR__ . '/Tests',
    ]);
    $config->ruleWithConfiguration(\PhpCsFixer\Fixer\Comment\HeaderCommentFixer::class, [
        'comment_type' => 'comment',
        'header' => $header,
        'separate' => 'both',
    ]);
};
