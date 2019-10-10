Implementation
==============

- `Implementation`_
    - `Data processors`_
    - `View helpers`_

Data processors
---------------
Below is a list of available data processors provided by the Browserupdatenotifier extension.

.. code-block:: json
    DMG\Browserupdatenotifier\DataProcessing\AbstractDataProcessor
    DMG\Browserupdatenotifier\DataProcessing\CategoryProcessor

DMG\Browserupdatenotifier\DataProcessing\AbstractDataProcessor
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
An abstract data processor containing some useful properties and methods which are commonly used in data processors.

To use the `AbstractDataProcessor` add the following to your class.

.. code-block::php

    class MyCustomDataProcessor extends \DMG\Browserupdatenotifier\DataProcessing\AbstractDataProcessor

Properties
^^^^^^^^^^
A list of available properties

+-----------------------+-------------------------------------------------------+-----------------------+
| Property              | Type                                                  | Default               |
+=======================+=======================================================+=======================+
| as                    | string                                                | records               |
+-----------------------+-------------------------------------------------------+-----------------------+
| objectManager         | TYPO3\CMS\Extbase\Object\ObjectManager                | NA                    |
+-----------------------+-------------------------------------------------------+-----------------------+
| contentDataProcessor  | TYPO3\CMS\Frontend\ContentObject\ContentDataProcessor | NA                    |
+-----------------------+-------------------------------------------------------+-----------------------+
| requiredConfiguration | array                                                 | NA                    |
+-----------------------+-------------------------------------------------------+-----------------------+

Methods
^^^^^^^
A list of available methods

+--------------------------+-------------+----------------------------------------------------------------------------------------------------------------------------------------------+
| Method                   | Return type | Description                                                                                                                                  |
+==========================+=============+==============================================================================================================================================+
| setResultAs              | array       | Save the results as the `as` property in the `$processedData`. Automatically calls `resolveDataProcessing` to resolve nested data processing |
+--------------------------+-------------+----------------------------------------------------------------------------------------------------------------------------------------------+
| resolveDataProcessing    | array       | Resolve nested data processing                                                                                                               |
+--------------------------+-------------+----------------------------------------------------------------------------------------------------------------------------------------------+
| hasRequiredConfiguration | bool        | Checks if all required configuration defined in the `requiredConfiguration` property is provided                                             |
+--------------------------+-------------+----------------------------------------------------------------------------------------------------------------------------------------------+

MaxServ\SwissKnife\DataProcessing\CategoryProcessor
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
The `CategoryProcessor` is used to retrieve categories for a page or some content, taking into consideration the current language.

.. code-block:: json

    dataProcessing {
        10 = MaxServ\SwissKnife\DataProcessing\CategoryProcessor
        10 {
            as = categories
        }
    }

Arguments
^^^^^^^^^
All available arguments for the `DMG\Browserupdatenotifier\DataProcessing\CategoryProcessor` data processor

+---------------+-----------+-----------------------+
| Option        | Type      | Default               |
+===============+===========+=======================+
| pid           | int       | TSFE:id               |
+---------------+-----------+-----------------------+
| table         | string    | pages                 |
+---------------+-----------+-----------------------+
| languageUid   | int       | TSFE:sys_language_uid |
+---------------+-----------+-----------------------+
| as            | string    | categories            |
+---------------+-----------+-----------------------+

View helpers
------------
There are currently no view helpers available