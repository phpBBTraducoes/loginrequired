<?php

/**
 *
 * @package phpBB Extension - Login Required
 * @copyright (c) 2015 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.1.0] (https://github.com/phpBBTraducoes)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LOGINREQUIRED_TITLE'				=> 'Login Required',
	'LOGINREQUIRED_CONFIG'				=> 'Configuração',
	'LOGINREQUIRED_CONFIG_UPDATED'		=> '<strong>Extensão Login Required </strong><br />» Configuração atualizada',
));
