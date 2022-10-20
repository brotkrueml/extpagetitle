.. include:: /Includes.rst.txt

.. _usage:

=====
Usage
=====

Include static template
=======================

First you have to include the static template "Extension Page Title" in your
template record. This registers the page title provider. As default, this page
title provider is called before the record page title provider. You can change
this via TypoScript, just look into the
:file:`Configuration/TypoScript/setup.typoscript` file.


Set the page title in your extension
====================================

In your extension, e.g. in the show action of an Extbase controller, just insert
these two lines of code:

.. code-block:: php

   $titleProvider = GeneralUtility::makeInstance(\Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider::class);
   $titleProvider->setTitle($yourPageTitle);

Since TYPO3 v10 LTS you should use :ref:`dependency injection
<t3coreapi:dependency-injection>` to inject the class into your controller:

.. code-block:: php

   use Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider;

   final class FooController extends ActionController
   {
      private ExtensionPageTitleProvider $pageTitleProvider;

      public function __construct(ExtensionPageTitleProvider $pageTitleProvider) {
         $this->pageTitleProvider = $pageTitleProvider;
      }

      public function showAction(Foo $foo): void
      {
         $this->pageTitleProvider->setTitle($foo->getTitle());
      }
   }

