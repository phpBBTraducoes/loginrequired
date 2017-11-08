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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, array(
	'LOGINREQUIRED_ENABLED'				=> 'Ativar extensão',
	'LOGINREQUIRED_ENABLED_EXP'			=> 'Globalmente, habilite ou desative o requisito para que os usuários façam o login.',
	'LOGINREQUIRED_REGEX'				=> 'As exceções listadas abaixo são expressões regulares',
	'LOGINREQUIRED_EXCEPTIONS'			=> 'Exceções',
	'LOGINREQUIRED_EXCEPTIONS_EXP'		=> 'Por padrão, todas as páginas exigem que os usuários façam login para acessá-los. Se você deseja permitir o acesso a páginas específicas sem efetuar login, liste-as aqui, uma por linha. Exemplos:<ul><li style="font-size:0.95em">Para conceder aos hóspedes o acesso às FAQ, use "faq.php" (para phpBB 3.1.x) ou "app.php/help/faq" (para phpBB 3.2.x, sem aspas).</li><li style="font-size:0.95em">Para conceder aos hóspedes o acesso a uma route de extensão em /coolextension, use "app.php/coolextension" (sem aspas).</li><li style="font-size:0.95em">Para conceder aos convidados acesso a uma página personalizada localizada em /custom/page.php, use "custom/page.php" (sem aspas).</li></ul>',
));
