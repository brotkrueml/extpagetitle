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

