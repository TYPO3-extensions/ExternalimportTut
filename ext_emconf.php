<?php

/*********************************************************************
* Extension configuration file for ext "externalimport_tut".
*
* Generated by ext 13-06-2016 18:50 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'External Import Tutorial',
  'description' => 'Tutorial for the External Import extension. Contains the manual and the necessary files.',
  'category' => 'example',
  'author' => 'Francois Suter (Cobweb)',
  'author_email' => 'typo3@cobweb.ch',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'author_company' => '',
  'version' => '2.0.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'external_import' => '3.0.0-0.0.0',
      'svconnector_csv' => '2.0.0-0.0.0',
      'svconnector_feed' => '2.0.0-0.0.0',
      'news' => '2.3.0-0.0.0',
      'typo3' => '7.6.0-7.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'devlog' => '',
    ),
  ),
  '_md5_values_when_last_written' => 'a:45:{s:9:"ChangeLog";s:4:"4666";s:10:"README.txt";s:4:"5a50";s:13:"composer.json";s:4:"19da";s:12:"ext_icon.png";s:4:"6ea1";s:17:"ext_localconf.php";s:4:"cc9d";s:14:"ext_tables.php";s:4:"6db1";s:14:"ext_tables.sql";s:4:"3f1f";s:31:"Classes/Hook/ExternalImport.php";s:4:"8b06";s:45:"Classes/Transformation/NameTransformation.php";s:4:"57d4";s:54:"Configuration/TCA/tx_externalimporttut_departments.php";s:4:"adfe";s:48:"Configuration/TCA/tx_externalimporttut_teams.php";s:4:"e7f8";s:40:"Configuration/TCA/Overrides/fe_users.php";s:4:"9266";s:57:"Configuration/TCA/Overrides/tx_news_domain_model_link.php";s:4:"2cae";s:57:"Configuration/TCA/Overrides/tx_news_domain_model_news.php";s:4:"f71d";s:26:"Documentation/Includes.txt";s:4:"c83c";s:23:"Documentation/Index.rst";s:4:"63f6";s:26:"Documentation/Settings.yml";s:4:"d8f1";s:25:"Documentation/Targets.rst";s:4:"cc7b";s:39:"Documentation/EmployeesImport/Index.rst";s:4:"575a";s:51:"Documentation/EmployeesImport/Departments/Index.rst";s:4:"b788";s:49:"Documentation/EmployeesImport/Employees/Index.rst";s:4:"8fb5";s:45:"Documentation/EmployeesImport/Teams/Index.rst";s:4:"41dd";s:47:"Documentation/Images/DepartmentsFileContent.png";s:4:"5ee7";s:44:"Documentation/Images/DepartmentsImported.png";s:4:"299d";s:54:"Documentation/Images/EmployeesImportedWithHolidays.png";s:4:"ffa7";s:37:"Documentation/Images/FeUserRecord.png";s:4:"21b7";s:41:"Documentation/Images/ListOfReferences.png";s:4:"6150";s:39:"Documentation/Images/ListViewOfNews.png";s:4:"9c85";s:43:"Documentation/Images/SettingStoragePage.png";s:4:"3ff8";s:38:"Documentation/Images/SetupOverview.png";s:4:"2176";s:41:"Documentation/Images/TeamsFileContent.png";s:4:"ec10";s:47:"Documentation/Images/TeamsImportWithMembers.png";s:4:"7fe2";s:36:"Documentation/Installation/Index.rst";s:4:"5722";s:36:"Documentation/Introduction/Index.rst";s:4:"3bc0";s:33:"Documentation/RssImport/Index.rst";s:4:"7c90";s:38:"Documentation/RssImport/Data/Index.rst";s:4:"f105";s:39:"Documentation/RssImport/Setup/Index.rst";s:4:"ca6c";s:32:"Documentation/Scenario/Index.rst";s:4:"0821";s:38:"Resources/Private/Data/departments.txt";s:4:"4626";s:36:"Resources/Private/Data/employees.txt";s:4:"8c68";s:35:"Resources/Private/Data/holidays.txt";s:4:"7b08";s:32:"Resources/Private/Data/teams.txt";s:4:"ad82";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"286c";s:37:"Resources/Public/Icons/Department.png";s:4:"ce62";s:31:"Resources/Public/Icons/Team.png";s:4:"8a27";}',
  'user' => 'francois',
  'comment' => 'TYPO3 CMS 7 compatibility; updated for external_import 3.0.0.',
);

?>