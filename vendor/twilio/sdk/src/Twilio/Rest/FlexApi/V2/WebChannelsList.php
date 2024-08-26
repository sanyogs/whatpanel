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
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\FlexApi\V2;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;


class WebChannelsList extends ListResource
    {
    /**
     * Construct the WebChannelsList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(
        Version $version
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        ];

        $this->uri = '/WebChats';
    }

    /**
     * Create the WebChannelsInstance
     *
     * @param string $addressSid The SID of the Conversations Address. See [Address Configuration Resource](https://www.twilio.com/docs/conversations/api/address-configuration-resource) for configuration details. When a conversation is created on the Flex backend, the callback URL will be set to the corresponding Studio Flow SID or webhook URL in your address configuration.
     * @param array|Options $options Optional Arguments
     * @return WebChannelsInstance Created WebChannelsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $addressSid, array $options = []): WebChannelsInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'AddressSid' =>
                $addressSid,
            'ChatFriendlyName' =>
                $options['chatFriendlyName'],
            'CustomerFriendlyName' =>
                $options['customerFriendlyName'],
            'PreEngagementData' =>
                $options['preEngagementData'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new WebChannelsInstance(
            $this->version,
            $payload
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.FlexApi.V2.WebChannelsList]';
    }
}
