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

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Sms extends TwiML {
    /**
     * Sms constructor.
     *
     * @param string $message Message body
     * @param array $attributes Optional attributes
     */
    public function __construct($message, $attributes = []) {
        parent::__construct('Sms', $message, $attributes);
    }

    /**
     * Add To attribute.
     *
     * @param string $to Number to send message to
     */
    public function setTo($to): self {
        return $this->setAttribute('to', $to);
    }

    /**
     * Add From attribute.
     *
     * @param string $from Number to send message from
     */
    public function setFrom($from): self {
        return $this->setAttribute('from', $from);
    }

    /**
     * Add Action attribute.
     *
     * @param string $action Action URL
     */
    public function setAction($action): self {
        return $this->setAttribute('action', $action);
    }

    /**
     * Add Method attribute.
     *
     * @param string $method Action URL method
     */
    public function setMethod($method): self {
        return $this->setAttribute('method', $method);
    }

    /**
     * Add StatusCallback attribute.
     *
     * @param string $statusCallback Status callback URL
     */
    public function setStatusCallback($statusCallback): self {
        return $this->setAttribute('statusCallback', $statusCallback);
    }
}