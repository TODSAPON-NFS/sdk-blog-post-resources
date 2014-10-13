sdk-blog-post-resources
=======================

Scripts for following along with the SDK blog post at home

Getting started
---------------

1. Get composer (http://getcomposer.org)
2. Run `composer require rb-cohen/sdk-blog-post-resources`
3. Create a new API token at https://app.chartblocks.com
4. Put the token and secret in to config.php

Running the scripts
-------------------

1. Run `php createDataSet.php` to create a new data set
2. Copy the returned data set ID to config.php
3. Run `php updateTemperature.php` to push the current temperature to the data set