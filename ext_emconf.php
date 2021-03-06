<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "databaseconnectionscanner".
 *
 * Auto generated 05-03-2017 23:46
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'DatabaseConnectionScanner',
  'description' => 'Find usages of DatabaseConnection class',
  'category' => 'module',
  'author' => 'Nicole Cordes',
  'author_email' => 'typo3@cordes.co',
  'author_company' => 'CPS-IT GmbH',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '0.1.3',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-8.6.99',
      'reports' => '7.6.0-8.6.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:7:{s:9:"ChangeLog";s:4:"dc02";s:13:"composer.json";s:4:"e91e";s:12:"ext_icon.png";s:4:"c236";s:14:"ext_tables.php";s:4:"df2b";s:47:"Classes/Report/DatabaseConnectionListReport.php";s:4:"6fde";s:46:"Resources/Private/Language/de.locallang_be.xlf";s:4:"fe67";s:43:"Resources/Private/Language/locallang_be.xlf";s:4:"db7d";}',
);

