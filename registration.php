<?php
 
 /**
  * The code below is used to register the
  * OAuth extension/component with the Mangeto
  * core Module. It specifies the root directory
  * of the plugin.
  */

  use Magento\Framework\Component\ComponentRegistrar;

  ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'lbrce_customform',
    __DIR__
);
