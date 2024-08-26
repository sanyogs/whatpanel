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
 * Twilio - Chat
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Chat\V2\Service\Channel;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class MessageContext extends InstanceContext
    {
    /**
     * Initialize the MessageContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the [Service](https://www.twilio.com/docs/chat/rest/service-resource) to create the Message resource under.
     * @param string $channelSid The SID of the [Channel](https://www.twilio.com/docs/chat/channels) the new Message resource belongs to. This value can be the Channel resource's `sid` or `unique_name`.
     * @param string $sid The SID of the Message resource to delete.
     */
    public function __construct(
        Version $version,
        $serviceSid,
        $channelSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        'channelSid' =>
            $channelSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/Channels/' . \rawurlencode($channelSid)
        .'/Messages/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the MessageInstance
     *
     * @param array|Options $options Optional Arguments
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(array $options = []): bool
    {

        $options = new Values($options);

        $headers = Values::of(['X-Twilio-Webhook-Enabled' => $options['xTwilioWebhookEnabled']]);

        return $this->version->delete('DELETE', $this->uri, [], [], $headers);
    }


    /**
     * Fetch the MessageInstance
     *
     * @return MessageInstance Fetched MessageInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): MessageInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new MessageInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['channelSid'],
            $this->solution['sid']
        );
    }


    /**
     * Update the MessageInstance
     *
     * @param array|Options $options Optional Arguments
     * @return MessageInstance Updated MessageInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): MessageInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'Body' =>
                $options['body'],
            'Attributes' =>
                $options['attributes'],
            'DateCreated' =>
                Serialize::iso8601DateTime($options['dateCreated']),
            'DateUpdated' =>
                Serialize::iso8601DateTime($options['dateUpdated']),
            'LastUpdatedBy' =>
                $options['lastUpdatedBy'],
            'From' =>
                $options['from'],
        ]);

        $headers = Values::of(['X-Twilio-Webhook-Enabled' => $options['xTwilioWebhookEnabled']]);

        $payload = $this->version->update('POST', $this->uri, [], $data, $headers);

        return new MessageInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['channelSid'],
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
        return '[Twilio.Chat.V2.MessageContext ' . \implode(' ', $context) . ']';
    }
}
