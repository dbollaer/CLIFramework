<?php
/*
 * This file is part of the {{ }} package.
 *
 * (c) Yo-An Lin <cornelius.howl@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

require 'vendor/pear/Universal/ClassLoader/BasePathClassLoader.php';
$classloader = new \Universal\ClassLoader\BasePathClassLoader(array( 
    'src', 'tests' , 'vendor/pear' ));
$classloader->useIncludePath(true);
$classloader->register();
$app = new \TestApp\Application;
$app->run($argv);

$logger = $app->getLogger();
$logger->info('info message');
$logger->debug('debug message');
$logger->info2('info2 message');
$logger->warn('warning message');

$line = $app->ask('Your Name',array('John','Mary'));
echo "input value: ";
var_dump($line); 
