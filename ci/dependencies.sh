#!/bin/bash -e

# Composer
curl -s http://getcomposer.org/installer | php
COMPOSER_PROCESS_TIMEOUT=4000 php -dapc.enable_cli=0 composer.phar -v install
