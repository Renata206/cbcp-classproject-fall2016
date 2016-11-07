<?php

$config = array(
  // URL
  'url_base' => 'http://www.bootcamp-eshop.local',

  // database
  'db_host' => 'localhost',
  'db_database' => 'bootcamp_eshop',
  'db_user' => 'root',
  'db_pass' => '',
  'db_charset' => 'utf8',

  // SMARTY
  'smarty_config_dir' => CONFIG_DIR.'/smarty_config',
  'smarty_template_dir' => VIEWS_DIR,
  'smarty_compile_dir' => CACHE_DIR.'/smarty_compile',
  'smarty_cache_dir' => CACHE_DIR.'/smarty_cache',
);