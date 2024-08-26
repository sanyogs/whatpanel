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
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class ShortCodeContext extends InstanceContext
    {
    /**
     * Initialize the ShortCodeContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the ShortCode resource(s) to fetch.
     * @param string $sid The Twilio-provided string that uniquely identifies the ShortCode resource to fetch
     */
    public function __construct(
        Version $version,
        $accountSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'accountSid' =>
            $accountSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid)
        .'/SMS/ShortCodes/' . \rawurlencode($sid)
        .'.json';
    }

    /**
     * Fetch the ShortCodeInstance
     *
     * @return ShortCodeInstance Fetched ShortCodeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ShortCodeInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new ShortCodeInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }


    /**
     * Update the ShortCodeInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ShortCodeInstance Updated ShortCodeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ShortCodeInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' =>
                $options['friendlyName'],
            'ApiVersion' =>
                $options['apiVersion'],
            'SmsUrl' =>
                $options['smsUrl'],
            'SmsMethod' =>
                $options['smsMethod'],
            'SmsFallbackUrl' =>
                $options['smsFallbackUrl'],
            'SmsFallbackMethod' =>
                $options['smsFallbackMethod'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new ShortCodeInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
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
        return '[Twilio.Api.V2010.ShortCodeContext ' . \implode(' ', $context) . ']';
    }
}
