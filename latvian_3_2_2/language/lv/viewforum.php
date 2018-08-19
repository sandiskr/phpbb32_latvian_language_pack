<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Aktīvie temati',
	'ANNOUNCEMENTS'			=> 'Paziņojumi',

	'FORUM_PERMISSIONS'		=> 'Foruma atļaujas',

	'ICON_ANNOUNCEMENT'		=> 'Paziņojums',
	'ICON_STICKY'			=> 'Svarīgi',

	'LOGIN_NOTIFY_FORUM'	=> 'Tu esi informēts par šo forumu, lūdzu pieslēdzies, lai to apskatītu.',

	'MARK_TOPICS_READ'		=> 'Atzīmēt tematus kā lasītus',

	'NEW_POSTS_HOT'			=> 'Jauni raksti [ Populārie ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Jauni raksti [ Slēgtie ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Nav jauni raksti [ Populārie ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Nav jauni raksti [ Slēgtie ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Tev nav tiesību skatīt un lasīt tēmas šajā forumā.',
	'NO_FORUMS_IN_CATEGORY'	=> 'Šai kategorijai nav forumu.',
	'NO_UNREAD_POSTS_HOT'		=> 'Nav nelasītu rakstu [ Populārie ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Nav nelastītu rakstu [ Slēgtie ]',

	'POST_FORUM_LOCKED'		=> 'Forums ir slēgts',

	'TOPICS_MARKED'			=> 'Temati šajā forumā ir atzīmēti kā lasīti.',

	'UNREAD_POSTS_HOT'		=> 'Nelasītie raksti [ Populārie ]',
	'UNREAD_POSTS_LOCKED'	=> 'Nelasītie raksti [ Slēgtie ]',

	'VIEW_FORUM'			=> 'Apskatīt forumu',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d temats',
		2	=> '%d temati',
	),
));
