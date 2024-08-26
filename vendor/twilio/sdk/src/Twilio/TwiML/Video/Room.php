<?php 
/*
 * This file is part of WHATPANEL.
 *
 * @package     WHAT PANEL – Web Hosting Application Terminal Panel.
 * @copyright   2023-2024 Version Next Technologies and MadPopo. All rights reserved.
 * @license     BSL; see LICENSE.txt
 * @link        https://www.version-next.com
 */

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Video;

use Twilio\TwiML\TwiML;

class Room extends TwiML {
    /**
     * Room constructor.
     * 
     * @param string $name Room name
     */
    public function __construct($name) {
        parent::__construct('Room', $name);
    }
}