<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-63-32-248-14.eu-west-1.compute.amazonaws.com');
$CFG->dbname    = getenv('d3304e76h6jdpc');
$CFG->dbuser    = getenv('dibzkubqtxoezb');
$CFG->dbpass    = getenv('f1b31df3dc1cae9c175eae260c8e9bd9d8ebb1e8f229470f8a385f5415d6d32e');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://moodle-exaport.herokuapp.com');
$CFG->dataroot  = getenv('/tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
