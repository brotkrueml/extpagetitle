# About Extension Page Title

This is a TYPO3 extension that simplifies setting a page title in an extension.

## Requirements

The extension required TYPO3 v9 LTS.

## Installation

### Installation via Composer

The recommended way to install this extension is by using [Composer](https://getcomposer.org/). In your Composer based TYPO3 project root, just do

    composer require brotkrueml/extpagetitle

### Installation as extension from TYPO3 Extension Repository (TER)

Download and install the extension with the extension manager module.

## Usage

Sometimes it is necessary, e.g. for SEO reasons, to change the browser page title:

* In a show action you want to display the name of the record displayed.
* In a list action the page number should be shown in the page title
* etc.

This extension makes use of the [Page Title API](https://docs.typo3.org/typo3cms/CoreApiReference/ApiOverview/PageTitleApi/) introduced in TYPO3 v9 LTS and simplifies the setting of the page title.

### Include static template

First you have to include the static template "Extension page title" in your template record.
This registers the page title provider.

### Set the page title in your extension

In your extension, e.g. in the show action of your controller, just insert these two lines of code:

    $titleProvider = GeneralUtility::makeInstance(\Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider::class);
    $titleProvider->setTitle($yourPageTitle);

Now you're done ...
