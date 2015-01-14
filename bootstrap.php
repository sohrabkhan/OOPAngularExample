<?php
/**
 * The bootstrap file for the project. This is the only file that needs to be included in the entry script index.php
 *
 * @author Sohrab Khan
 * @copyright Sohrab Khan
 * @version 0.1
 */

include_once('src/AutoLoader.php');

AutoLoader::registerDirectory('src/Controller');
AutoLoader::registerDirectory('src/Model');