<?php
/************************************************************************/
/* ATutor																*/
/************************************************************************/
/* Copyright (c) 2002-2004 by Greg Gay, Joel Kronenberg & Heidi Hazelton*/
/* Adaptive Technology Resource Centre / University of Toronto			*/
/* http://atutor.ca														*/
/*																		*/
/* This program is free software. You can redistribute it and/or		*/
/* modify it under the terms of the GNU General Public License			*/
/* as published by the Free Software Foundation.						*/
/************************************************************************/
// $Id: RemoteLanguageManager.class.php 1670 2004-09-23 14:03:49Z joel $

/**
* RemoteLanguageManager
* Class for managing available languages as Language Objects.
* @access	public
* @author	Joel Kronenberg
* @see		Language.class.php
* @package	Language
*/
class RemoteLanguageManager extends LanguageManager {

	function RemoteLanguageManager() {
		$version = str_replace('.','_',VERSION);

		$language_xml = @file_get_contents('http://update.atutor.ca/languages/'.$version.'/languages.xml');
		if ($language_xml !== FALSE) {

			$languageParser =& new LanguagesParser();
			$languageParser->parse($language_xml);

			$this->numLanguages = $languageParser->getNumLanguages();

			for ($i = 0; $i < $this->numLanguages; $i++) {
				$thisLanguage =& new Language($languageParser->getLanguage($i));

				$this->availableLanguages[$thisLanguage->getCode()][$thisLanguage->getCharacterSet()] =& $thisLanguage;
			}
		} else {
			$this->numLanguages = 0;
			$this->availableLanguages = array();
		}
	}

	// public
	function fetchLanguage($language_code, $filename) {
		$version = str_replace('.','_',VERSION);

		$language_pack = @file_get_contents('http://update.atutor.ca/languages/' . $version . '/atutor_' . $version . '_' . $language_code . '.zip');

		$fp = fopen($filename, 'wb+');
		fwrite($fp, $language_pack, strlen($language_pack));

	}
}

?>