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
	'ALL_AVAILABLE'			=> 'All available',
	'ALL_RESULTS'			=> 'All results',

	'DISPLAY_RESULTS'		=> 'Display results as',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Search found %d match',
		2	=> 'Search found %d matches',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Search found more than %d match',
		2	=> 'Search found more than %d matches',
	),

	'GLOBAL'				=> 'Global announcement',

	'IGNORED_TERMS'			=> 'ignored',
	'IGNORED_TERMS_EXPLAIN'	=> 'The following words in your search query were ignored because they are too common words: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Jump to post',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'The board requires you to be registered and logged in to view your own posts.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'The board requires you to be registered and logged in to view your unread posts.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'The board requires you to be registered and logged in to view new posts since your last visit.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'You specified too many words to search for. Please do not enter more than %1$d word.',
		2	=> 'You specified too many words to search for. Please do not enter more than %1$d words.',
	),

	'NO_KEYWORDS'			=> 'You must specify at least one word to search for. Each word must consist of at least %s and must not contain more than %s excluding wildcards.',
	'NO_RECENT_SEARCHES'	=> 'No searches have been carried out recently.',
	'NO_SEARCH'				=> 'Sorry but you are not permitted to use the search system.',
	'NO_SEARCH_RESULTS'		=> 'No suitable matches were found.',
	'NO_SEARCH_LOAD'		=> 'Sorry but you cannot use search at this time. The server has high load. Please try again later.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Sorry but you cannot use search at this time. Please try again in %d second.',
		2	=> 'Sorry but you cannot use search at this time. Please try again in %d seconds.',
	),
	'NO_SEARCH_UNREADS'		=> 'Sorry but searching for unread posts has been disabled on this board.',
	'WORD_IN_NO_POST'		=> 'No posts were found because the word <strong>%s</strong> is not contained in any post.',
	'WORDS_IN_NO_POST'		=> 'No posts were found because the words <strong>%s</strong> are not contained in any post.',

	'POST_CHARACTERS'		=> 'characters of posts',
	'PHRASE_SEARCH_DISABLED'	=> 'Searching by exact phrase is not supported on this board.',

	'RECENT_SEARCHES'		=> 'Recent searches',
	'RESULT_DAYS'			=> 'Limit results to previous',
	'RESULT_SORT'			=> 'Sort results by',
	'RETURN_FIRST' => 'Atgriezt tikai noteiktu skaitu pirmo simbolu no rezultāta',
	'GO_TO_SEARCH_ADV'	=> 'Go to advanced search',

	'SEARCHED_FOR'				=> 'Search term used',
	'SEARCHED_TOPIC'			=> 'Searched topic',
	'SEARCHED_QUERY'			=> 'Searched query',
	'SEARCH_ALL_TERMS' => 'Meklēt visus ievadītos vārdus vai precīzi ievadīto tekstu',
	'SEARCH_ANY_TERMS' => 'Meklēt jebkādas kombinācijas',
	'SEARCH_AUTHOR' => 'Meklēt pēc autora',
	'SEARCH_AUTHOR_EXPLAIN' => 'Lietojiet * kā aizstājējsimbolu, lai rezultāts sakristu daļēji.',
	'SEARCH_FIRST_POST'			=> 'First post of topics only',
	'SEARCH_FORUMS'				=> 'Search in forums',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Select the forum or forums you wish to search in. Subforums are searched automatically if you do not disable “search subforums“ below.',
	'SEARCH_IN_RESULTS'			=> 'Search these results',
	'SEARCH_KEYWORDS_EXPLAIN' => 'Lietojiet simbolu <strong>+</strong> priekšā katram vārdam, kuram noteikti jāatrodas meklējamajā rezultātā un simbolu <strong>-</strong> priekšā katram vārdam, kuram nav jāatrodas rezultātā. Ievietojiet vairākus vārdus, atdalītus ar simbolu <strong>|</strong> iekš kvadrātiekavām, ja tikai vienam no šiem vārdiem ir jāatrodas rezultātā. Lietojiet * kā aizstājējsimbolu, lai rezultāts sakristu daļēji.',
	'SEARCH_MSG_ONLY'			=> 'Message text only',
	'SEARCH_OPTIONS' => 'Meklēšanas opcijas',
	'SEARCH_QUERY' => 'Meklēšanas pieprasījums',
	'SEARCH_SUBFORUMS' => 'Meklēt apakšforumos',
	'SEARCH_TITLE_MSG'			=> 'Post subjects and message text',
	'SEARCH_TITLE_ONLY'			=> 'Topic titles only',
	'SEARCH_WITHIN'				=> 'Search within',
	'SORT_ASCENDING' => 'No augšas',
	'SORT_AUTHOR'				=> 'Author',
	'SORT_DESCENDING' => 'No apakšas',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Post subject',
	'SORT_TIME'					=> 'Post time',
	'SPHINX_SEARCH_FAILED' => 'Nesekmīga meklēšana: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Sorry, search could not be performed. More information about this failure has been logged in the error log.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'You must specify at least %d character of the authors name.',
		2	=> 'You must specify at least %d characters of the authors name.',
	),
));

