<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'extpagetitle',
        'Configuration/TypoScript',
        'Extension Page Title'
    );
});