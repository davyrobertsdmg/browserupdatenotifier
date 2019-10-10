Installation
===============

- `Installation`_
    - `Requirements`_
    - `Installing Browser Update Notifier`_
    - `Configuration`_

Requirements
~~~~~~~~~~~~
Make sure the following requirements are met:

- TYPO3 >= 8.7.x
- PHP >= 7.x
- All additional requirements that come with `TYPO3 v8.7.x <https://docs.typo3.org/typo3cms/InstallationGuide/8.7/In-depth/SystemRequirements/Index.html>`_

Installing Browser Update Notifier
~~~~~~~~~~~~~~~~~~~~~~
Composer will be used to install Browswer Update Notifier.
If you are not familiar with Composer, you can read their documentation `here <https://getcomposer.org/doc/>`_.

Firstly we need to add the repository in which Browser Update Notifier can be found.
Add the following to your project's `composer.json`:

.. code-block:: json

    //{
    //    "type": "composer",
    //    "url": "https://composer.maxserv.com/"
    //}

    {
       "repositories":[
           {
               "name": "dmg/browserupdatenotifier",
               "type": "vcs",
               "url": "https://github.com/davyrobertsdmg/browserupdatenotifier"
           }
       ]
    }

After adding the repository run the following command in your CLI:

.. code-block:: bash

    composer require dmg/browserupdatenotifier
    //composer require maxserv/browserupdatenotifier

The Browser Update Notifier extension should now be visible in the TYPO3 backend at
**"Admin tools > Extensions"**.