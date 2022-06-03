# anagram-master
## installation de phpunit
sudo apt install php-xml
sudo apt-get install php-mbstring
composer require --dev phpunit/phpunit ^9.5

## tester la suite
./vendor/phpunit/phpunit/phpunit --verbose anagramHelperTest.php

## tester une seule fonction
./vendor/phpunit/phpunit/phpunit --verbose anagramHelperTest.php --filter AnagramHelperTest::testCharsCounter1