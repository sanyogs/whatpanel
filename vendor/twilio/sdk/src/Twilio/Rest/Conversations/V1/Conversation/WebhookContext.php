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


namespace Twilio\Rest\Conversations\V1\Conversation;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class WebhookContext extends InstanceContext
    {
    /**
     * Initialize the WebhookContext
     *
     * @param Version $version Version that contains the resource
     * @param string $conversationSid The unique ID of the [Conversation](https://www.twilio.com/docs/conversations/api/conversation-resource) for this webhook.
     * @param string $sid A 34 character string that uniquely identifies this resource.
     */
    public function __construct(
        Version $version,
        $conversationSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'conversationSid' =>
            $conversationSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Conversations/' . \rawurlencode($conversationSid)
        .'/Webhooks/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the WebhookInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the WebhookInstance
     *
     * @return WebhookInstance Fetched WebhookInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): WebhookInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new WebhookInstance(
            $this->version,
            $payload,
            $this->solution['conversationSid'],
            $this->solution['sid']
        );
    }


    /**
     * Update the WebhookInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WebhookInstance Updated WebhookInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): WebhookInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'Configuration.Url' =>
                $options['configurationUrl'],
            'Configuration.Method' =>
                $options['configurationMethod'],
            'Configuration.Filters' =>
                Serialize::map($options['configurationFilters'], function ($e) { return $e; }),
            'Configuration.Triggers' =>
                Serialize::map($options['configurationTriggers'], function ($e) { return $e; }),
            'Configuration.FlowSid' =>
                $options['configurationFlowSid'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new WebhookInstance(
            $this->version,
            $payload,
            $this->solution['conversationSid'],
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
        return '[Twilio.Conversations.V1.WebhookContext ' . \implode(' ', $context) . ']';
    }
}
