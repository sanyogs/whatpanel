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
 * Twilio - Intelligence
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Intelligence\V2;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class ServiceContext extends InstanceContext
    {
    /**
     * Initialize the ServiceContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid A 34 character string that uniquely identifies this Service.
     */
    public function __construct(
        Version $version,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'sid' =>
            $sid,
        ];

        $this->uri = '/Services/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the ServiceInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the ServiceInstance
     *
     * @return ServiceInstance Fetched ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ServiceInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new ServiceInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }


    /**
     * Update the ServiceInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ServiceInstance Updated ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ServiceInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'AutoTranscribe' =>
                Serialize::booleanToString($options['autoTranscribe']),
            'DataLogging' =>
                Serialize::booleanToString($options['dataLogging']),
            'FriendlyName' =>
                $options['friendlyName'],
            'LanguageCode' =>
                $options['languageCode'],
            'UniqueName' =>
                $options['uniqueName'],
            'AutoRedaction' =>
                Serialize::booleanToString($options['autoRedaction']),
            'MediaRedaction' =>
                Serialize::booleanToString($options['mediaRedaction']),
            'WebhookUrl' =>
                $options['webhookUrl'],
            'WebhookHttpMethod' =>
                $options['webhookHttpMethod'],
        ]);

        $headers = Values::of(['If-Match' => $options['ifMatch']]);

        $payload = $this->version->update('POST', $this->uri, [], $data, $headers);

        return new ServiceInstance(
            $this->version,
            $payload,
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
        return '[Twilio.Intelligence.V2.ServiceContext ' . \implode(' ', $context) . ']';
    }
}
