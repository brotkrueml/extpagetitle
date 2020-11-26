.. include:: /Includes.rst.txt

.. _usage:

=====
Usage
=====

Include Static Template
=======================

First you have to include the static template "Extension Page Title" in your
template record. This registers the page title provider. As default, this page
title provider is called before the record page title provider. You can change
this via TypoScript, just look into the
:file:`Configuration/TypoeScript/setup.typoscript` file.


Set The Page Title In Your Extension
====================================

In your extension, e.g. in the show action of an Extbase controller, just insert
these two lines of code::

    $titleProvider = GeneralUtility::makeInstance(\Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider::class);
    $titleProvider->setTitle($yourPageTitle);

Since TYPO3 v10 you can also use `dependency injection
<https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/DependencyInjection/Index.html>`_
to inject the class into your controller::

   use Brotkrueml\Extpagetitle\PageTitle\ExtensionPageTitleProvider;

   class FooController extends ActionController
   {
      /**
       * @var ExtensionPageTitleProvider
       */
      private $pageTitleProvider;

      public function __construct(ExtensionPageTitleProvider $pageTitleProvider) {
         $this->pageTitleProvider = $pageTitleProvider;
      }

      public function showAction(Foo $foo): void
      {
         $this->pageTitleProvider->setTitle($foo->getTitle());
      }
   }

