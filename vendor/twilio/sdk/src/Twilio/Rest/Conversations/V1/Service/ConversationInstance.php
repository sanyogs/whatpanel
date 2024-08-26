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
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Conversations\V1\Service\Conversation\WebhookList;
use Twilio\Rest\Conversations\V1\Service\Conversation\ParticipantList;
use Twilio\Rest\Conversations\V1\Service\Conversation\MessageList;


/**
 * @property string|null $accountSid
 * @property string|null $chatServiceSid
 * @property string|null $messagingServiceSid
 * @property string|null $sid
 * @property string|null $friendlyName
 * @property string|null $uniqueName
 * @property string|null $attributes
 * @property string $state
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property array|null $timers
 * @property string|null $url
 * @property array|null $links
 * @property array|null $bindings
 */
class ConversationInstance extends InstanceResource
{
    protected $_webhooks;
    protected $_participants;
    protected $_messages;

    /**
     * Initialize the ConversationInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $chatServiceSid The SID of the [Conversation Service](https://www.twilio.com/docs/conversations/api/service-resource) the Conversation resource is associated with.
     * @param string $sid A 34 character string that uniquely identifies this resource. Can also be the `unique_name` of the Conversation.
     */
    public function __construct(Version $version, array $payload, string $chatServiceSid, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'chatServiceSid' => Values::array_get($payload, 'chat_service_sid'),
            'messagingServiceSid' => Values::array_get($payload, 'messaging_service_sid'),
            'sid' => Values::array_get($payload, 'sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'attributes' => Values::array_get($payload, 'attributes'),
            'state' => Values::array_get($payload, 'state'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'timers' => Values::array_get($payload, 'timers'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
            'bindings' => Values::array_get($payload, 'bindings'),
        ];

        $this->solution = ['chatServiceSid' => $chatServiceSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ConversationContext Context for this ConversationInstance
     */
    protected function proxy(): ConversationContext
    {
        if (!$this->context) {
            $this->context = new ConversationContext(
                $this->version,
                $this->solution['chatServiceSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the ConversationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(array $options = []): bool
    {

        return $this->proxy()->delete($options);
    }

    /**
     * Fetch the ConversationInstance
     *
     * @return ConversationInstance Fetched ConversationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ConversationInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the ConversationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ConversationInstance Updated ConversationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ConversationInstance
    {

        return $this->proxy()->update($options);
    }

    /**
     * Access the webhooks
     */
    protected function getWebhooks(): WebhookList
    {
        return $this->proxy()->webhooks;
    }

    /**
     * Access the participants
     */
    protected function getParticipants(): ParticipantList
    {
        return $this->proxy()->participants;
    }

    /**
     * Access the messages
     */
    protected function getMessages(): MessageList
    {
        return $this->proxy()->messages;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Conversations.V1.ConversationInstance ' . \implode(' ', $context) . ']';
    }
}

