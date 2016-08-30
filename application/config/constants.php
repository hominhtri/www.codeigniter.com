<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/*================================== Custom ==================================*/
/*
|--------------------------------------------------------------------------
| Custom Path Root Directory
|--------------------------------------------------------------------------
|
| Path Root Directory
|
*/
defined('ROOTPATH') OR define('ROOTPATH', str_replace(SELF,'',FCPATH));

/*
|--------------------------------------------------------------------------
| Custom URL SUFFIX
|--------------------------------------------------------------------------
|
| URL SUFFFIX
|
*/
defined('URL_SUFFIX') OR define('URL_SUFFIX', '.html');

/*
|--------------------------------------------------------------------------
| Custom CURRENCY UNIT
|--------------------------------------------------------------------------
|
| CURRENCY UNIT
|
*/
defined('CURRENCY_UNIT_VND')        OR define('CURRENCY_UNIT_VND', ' VNĐ');
defined('CURRENCY_UNIT_USD')        OR define('CURRENCY_UNIT_USD', ' \$');

/*
|--------------------------------------------------------------------------
| Custom Directory Admin
|--------------------------------------------------------------------------
|
| Directory Admin
|
*/
defined('ADMIN_DIR_ROOT')           OR define('ADMIN_DIR_ROOT', 'admincp'); //Dinh nghia cac duong dan thuc
defined('ADMIN_DIR_VIRTUAL')        OR define("ADMIN_DIR_VIRTUAL", 'administrator'); //Dinh nghia cac duong dan ao
defined('ADMIN_DIR_TEMPLATE')       OR define('ADMIN_DIR_TEMPLATE', 'public/admin/'); //Dinh nghia thu muc chua tempalte admin

/*
|--------------------------------------------------------------------------
| Custom Directory Front-End PC
|--------------------------------------------------------------------------
|
| Front-End PC
|
*/
defined('DEFAULT_DIR_ROOT')         OR define('DEFAULT_DIR_ROOT', 'default'); //Dinh nghia cac duong dan thuc
defined('DEFAULT_DIR_TEMPLATE')     OR define('DEFAULT_DIR_TEMPLATE', 'public/default/'); //Dinh nghia thu muc chua tempalte admin

/*
|--------------------------------------------------------------------------
| Custom Directory Front-End Smartphone
|--------------------------------------------------------------------------
|
| Front-End Smartphone
|
*/
defined('SMARTPHONE_DIR_ROOT')      OR define('SMARTPHONE_DIR_ROOT', 'smartphone'); //Dinh nghia cac duong dan thuc
defined('SMARTPHONE_DIR_TEMPLATE')  OR define('SMARTPHONE_DIR_TEMPLATE', 'public/smartphone/'); //Dinh nghia thu muc chua tempalte smartphone

defined('DIR_PUBLIC')               OR define('DIR_PUBLIC', 'public/'); //Dinh nghia thu muc chua tempalte admin
defined('DIR_PUBLIC_IMG')           OR define('DIR_PUBLIC_IMG', 'upload/'); //Dinh nghia thu muc chua img mac dinh

defined('URL_LOGIN_ADMIN')          OR define('URL_LOGIN_ADMIN', ADMIN_DIR_VIRTUAL.'/login');
defined('URL_EXIT_ADMIN')           OR define('URL_EXIT_ADMIN', ADMIN_DIR_VIRTUAL.'/exit');
defined('URL_LANG_ADMIN')           OR define('URL_LANG_ADMIN', ADMIN_DIR_VIRTUAL.'/lang');
defined('URL_HOME_ADMIN')           OR define('URL_HOME_ADMIN', ADMIN_DIR_VIRTUAL.'/site/panel');