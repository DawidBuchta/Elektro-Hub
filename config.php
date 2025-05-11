<?php
$conf->debug = true; # set true during development and use in your code (for instance check if true to send additional message)

# ---- Webapp location
$conf->server_name = 'localhost';   # server address and port
$conf->protocol = 'http';           # http or https
$conf->app_root = '/Projekt_Systemu/Elektro-Hub/public';   # project subfolder in domain (relative to main domain)

# ---- Database config - values required by Medoo
$conf->db_type = 'mysql';
$conf->db_server = 'serwer2582132.home.pl';
$conf->db_name = '39603072_sklep';
$conf->db_user = '39603072_sklep';
$conf->db_pass = 'Czarke34@!';
$conf->db_charset = 'utf8';

# ---- Database config - optional values
$conf->db_port = '3380';
#$conf->db_prefix = '';
$conf->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];