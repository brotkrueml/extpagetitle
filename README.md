# About Extension Page Title

[![TYPO3](https://img.shields.io/badge/TYPO3-9%20LTS-orange.svg)](https://typo3.org/)
[![Build Status](https://travis-ci.org/brotkrueml/extpagetitle.svg?branch=master)](https://travis-ci.org/brotkrueml/extpagetitle)
[![Latest Stable Version](https://poser.pugx.org/brotkrueml/extpagetitle/v/stable)](https://packagist.org/packages/brotkrueml/extpagetitle)

This is a TYPO3 extension that simplifies setting a page title for an extension's plugin single view.

## Requirements

The extension requires TYPO3 v9 LTS.

## Why should you use this extension?

It makes your developer's life a little bit easier. Of course, you can add a page title provider and the TypoScript configuration to your own extension. But imagine, you have some more extensions you would like to change the page title? You have to add the class again and again. With this extension you have only one piece of code and don't repeat yourself. But please note: If you have two plugins on your page you will mostly need to write an own implementation to determine which plugin has precedence over the other.

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
This registers the page title provider. As default, this page title provider is called before the record page title provider. You can change this via Typoscript, just look into the `setup.typoscript` file.

### Set the page title in your extension

In your extension, e.g. in the show action of your controller, just insert these two lines of code:

    $titleProvider = GeneralUtility::makeInstance(\Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider::class);
    $titleProvider->setTitle($yourPageTitle);

Now you're done ...
