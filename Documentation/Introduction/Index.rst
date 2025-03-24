.. include:: /Includes.rst.txt

.. _introduction:

============
Introduction
============

Sometimes it is necessary, for example, for SEO reasons, to change the browser
page title:

*  In a show action you want to display the name of the record displayed.
*  In a list action the page number should be shown in the page title.
*  etc.

This extension makes use of the :ref:`Page Title API <t3coreapi:pagetitle>` and
simplifies the setting of the page title.

.. note::
   TYPO3 v14.0 introduced a new
   :ref:`RecordTitleProvider <changelog:feature-106232-1740166029>` which will
   make this extension obsolete.


Requirements
============

The extension in version |version| supports TYPO3 v11 LTS, TYPO3 v12 LTS and
TYPO3 v13.
Use an older version for compatibility with TYPO3 v9 LTS or TYPO3 v10 LTS.


Why should you use this extension?
==================================

It makes your developer's life a little easier. Of course, you can add a page
title provider and the TypoScript configuration to your own extension. But
imagine, you have some more extensions you would like to change the page title?
You have to add the class again and again. With this extension you have only one
piece of code and don't repeat yourself.

But please note: If you have two plugins on your page you will mostly need to
write an own implementation to determine which plugin has precedence over the
other.
