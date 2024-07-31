.. include:: /Includes.rst.txt

.. _usage:

=====
Usage
=====

.. _site-sets:

Site sets (TYPO3 v13)
=====================

This extension provides support for :ref:`site sets <t3coreapi_main:site-sets>`
introduced with TYPO3 v13.1.

Add :yaml:`brotkrueml/extpagetitle` as dependency to the configuration of
your site package:

.. code-block:: yaml
   :caption: EXT:your_sitepackage/Configuration/Sets/<your-set>/config.yaml
   :emphasize-lines: 5

   name: your-vendor/your-sitepackage
   label: Sitepackage

   dependencies:
     - brotkrueml/extpagetitle
     # ... and some other dependencies


Include static template (before TYPO3 v13, and v13 without site sets)
=====================================================================

First you have to include the static template "Extension Page Title" in your
template record. This registers the page title provider. As default, this page
title provider is called before the record page title provider. You can change
this via TypoScript, just look into the
:file:`Configuration/TypoScript/setup.typoscript` file.


Set the page title in your extension
====================================

In your extension, for example, in the show action of an Extbase controller,
:ref:`inject <t3coreapi:dependency-injection>` the class
:php:`\Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider` into
your controller:

.. code-block:: php
   :emphasize-lines: 5,11,16

   <?php

   declare(strict_types=1);

   use Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider;
   use Psr\Http\Message\ResponseInterface;

   final class FooController extends ActionController
   {
      public function __construct(
         private readonly ExtensionPageTitleProvider $pageTitleProvider,
      ) {}

      public function showAction(Foo $foo): ResponseInterface
      {
         $this->pageTitleProvider->setTitle($foo->getTitle());

         // ... more logic
      }
   }

