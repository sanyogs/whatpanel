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
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Messaging\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class ChannelSenderContext extends InstanceContext
    {
    /**
     * Initialize the ChannelSenderContext
     *
     * @param Version $version Version that contains the resource
     * @param string $messagingServiceSid The SID of the [Service](https://www.twilio.com/docs/chat/rest/service-resource) to fetch the resource from.
     * @param string $sid The SID of the ChannelSender resource to fetch.
     */
    public function __construct(
        Version $version,
        $messagingServiceSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'messagingServiceSid' =>
            $messagingServiceSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Services/' . \rawurlencode($messagingServiceSid)
        .'/ChannelSenders/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Fetch the ChannelSenderInstance
     *
     * @return ChannelSenderInstance Fetched ChannelSenderInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ChannelSenderInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new ChannelSenderInstance(
            $this->version,
            $payload,
            $this->solution['messagingServiceSid'],
            $this->solution['sid']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Messaging.V1.ChannelSenderContext ' . \implode(' ', $context) . ']';
    }
}
