<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = '';
$CFG->dblibrary = '';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = '';
$CFG->dbuser    = '';
$CFG->dbpass    = '';
//$CFG->dbuser    = '';
//$CFG->dbpass    = '';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => '',
);


$CFG->wwwroot   = '';

$CFG->dataroot  = '';
$CFG->admin     = '';

$CFG->directorypermissions = 0777;

$CFG->passwordsaltmain = '';

require_once(dirname(__FILE__) . '');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

$CFG->debug = 32767;
$CFG->debugdisplay = true;
