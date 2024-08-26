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
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Conversations\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class ConfigurationContext extends InstanceContext
    {
    /**
     * Initialize the ConfigurationContext
     *
     * @param Version $version Version that contains the resource
     * @param string $chatServiceSid The SID of the Service configuration resource to fetch.
     */
    public function __construct(
        Version $version,
        $chatServiceSid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'chatServiceSid' =>
            $chatServiceSid,
        ];

        $this->uri = '/Services/' . \rawurlencode($chatServiceSid)
        .'/Configuration';
    }

    /**
     * Fetch the ConfigurationInstance
     *
     * @return ConfigurationInstance Fetched ConfigurationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ConfigurationInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new ConfigurationInstance(
            $this->version,
            $payload,
            $this->solution['chatServiceSid']
        );
    }


    /**
     * Update the ConfigurationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ConfigurationInstance Updated ConfigurationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ConfigurationInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'DefaultConversationCreatorRoleSid' =>
                $options['defaultConversationCreatorRoleSid'],
            'DefaultConversationRoleSid' =>
                $options['defaultConversationRoleSid'],
            'DefaultChatServiceRoleSid' =>
                $options['defaultChatServiceRoleSid'],
            'ReachabilityEnabled' =>
                Serialize::booleanToString($options['reachabilityEnabled']),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new ConfigurationInstance(
            $this->version,
            $payload,
            $this->solution['chatServiceSid']
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
        return '[Twilio.Conversations.V1.ConfigurationContext ' . \implode(' ', $context) . ']';
    }
}
