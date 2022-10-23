# XAMPP
- xampp-osx-7.4.29-1-vm

## Terminal
- Launcher > Open terminal
- Final: Restart Apache

### Opción 1
```
apt-get update
apt-get install nano
cd /opt/lampp/phpmyadmin
nano config.inc.php
# ctrl + x + enter / yes
```

### Opción 2
```
# Si se editó desde un editor de código o afin
mv ../htdocs/config.inc.php ./
```

## Phpmyadmin remoto
- config.inc.php
```
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */
declare(strict_types=1);

/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie. Needs to be 32 chars long.
 */
$cfg['blowfish_secret'] = '43gtq3gdzh56wyb65w_**!ecyq34x4fht'; /* YOU SHOULD CHANGE THIS FOR A MORE SECURE COOKIE AUTH! */

/**
 * Servers configuration
 */
$i = 0;

/**
 * First server
 */
$i++;
/* Authentication type */
/*$cfg['Servers'][$i]['auth_type'] = 'config';*/
$cfg['ExecTimeLimit']=0;
$cfg['Servers'][$i]['user'] = '#';
$cfg['Servers'][$i]['password'] = '#;
/* Server parameters */
//$cfg['Servers'][$i]['host'] = 'localhost';
// Dirección y puerto
$cfg['Servers'][$i]['host'] = '#:3306';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

/**
 * phpMyAdmin configuration storage settings.
 */

/* User used to manipulate with storage */
// $cfg['Servers'][$i]['controlhost'] = '';
// $cfg['Servers'][$i]['controlport'] = '';
$cfg['Servers'][$i]['controluser'] = 'pma';
$cfg['Servers'][$i]['controlpass'] = '';
...
```