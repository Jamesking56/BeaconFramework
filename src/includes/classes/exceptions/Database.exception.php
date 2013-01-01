<?php

/*
	BeaconFramework
	by Beacon Studios
	www.beaconstudios.co.uk

	Please see version.inc.php in the src/includes folder for version number.

	Licensed under the Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported license.
	Please see LICENSE.txt for licensing details.
*/
if(!defined('BEACON')){ die('Hack Attempt.'); }

/**
* Database Exception - Thrown when a severe Database Class error occurs. Can be caught by the user.
*/
class DatabaseException extends Exception
{
	function __construct($message, $code = 0, Exception $previous = null)
	{
		parent::__construct($message, $code, $previous);
	}

	public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

?>