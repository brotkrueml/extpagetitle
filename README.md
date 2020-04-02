# About Extension Page Title

[![CI Status](https://github.com/brotkrueml/extpagetitle/workflows/CI/badge.svg?branch=master)](https://github.com/brotkrueml/extpagetitle/actions?query=workflow%3ACI)
[![Coverage Status](https://coveralls.io/repos/github/brotkrueml/extpagetitle/badge.svg?branch=master)](https://coveralls.io/github/brotkrueml/extpagetitle?branch=master)
[![Latest Stable Version](https://poser.pugx.org/brotkrueml/extpagetitle/v/stable)](https://packagist.org/packages/brotkrueml/extpagetitle)

This is a TYPO3 extension that simplifies setting a page title for an extension's plugin view.

## Requirements

The extension works with TYPO3 v9 LTS and TYPO3 v10.

## Why should you use this extension?

It makes your developer life a little easier. Of course, you can add a page title provider and the TypoScript
configuration to your own extension. But imagine, you have some more extensions you would like to change the page title?
You have to add the class again and again. With this extension you have only one piece of code and don't repeat yourself.
But please note: If you have two plugins on your page you will mostly need to write an own implementation to determine
which plugin has precedence over the other.

## Installation

### Installation via Composer

The recommended way to install this extension is by using [Composer](https://getcomposer.org/). In your Composer based
TYPO3 project root, just do:

    composer require brotkrueml/extpagetitle

### Installation as extension from TYPO3 Extension Repository (TER)

Install the extension with the Extension Manager module or download it from
[TER](https://extensions.typo3.org/extension/extpagetitle).

## Usage

Sometimes it is necessary, e.g. for SEO reasons, to change the browser page title:

* In a show action you want to display the name of the record displayed.
* In a list action the page number should be shown in the page title.
* etc.

This extension makes use of the
[Page Title API](https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/PageTitleApi/) introduced in
TYPO3 v9 LTS and simplifies the setting of the page title.

### Include static template

First you have to include the static template "Extension Page Title" in your template record.
This registers the page title provider. As default, this page title provider is called before the record page title
provider. You can change this via TypoScript, just look into the `setup.typoscript` file.

### Set the page title in your extension

In your extension, e.g. in the show action of your controller, just insert these two lines of code:

    $titleProvider = GeneralUtility::makeInstance(\Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider::class);
    $titleProvider->setTitle($yourPageTitle);

Since TYPO3 v10 you can also use
[dependency injection](https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/DependencyInjection/Index.html)
to inject the class into your controller.
