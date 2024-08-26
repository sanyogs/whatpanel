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


namespace Twilio\Rest\Chat\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Chat\V1\Service\User\UserChannelList;


/**
 * @property string|null $sid
 * @property string|null $accountSid
 * @property string|null $serviceSid
 * @property string|null $attributes
 * @property string|null $friendlyName
 * @property string|null $roleSid
 * @property string|null $identity
 * @property bool|null $isOnline
 * @property bool|null $isNotifiable
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property int|null $joinedChannelsCount
 * @property array|null $links
 * @property string|null $url
 */
class UserInstance extends InstanceResource
{
    protected $_userChannels;

    /**
     * Initialize the UserInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the [Service](https://www.twilio.com/docs/api/chat/rest/services) to create the resource under.
     * @param string $sid The Twilio-provided string that uniquely identifies the User resource to delete.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'attributes' => Values::array_get($payload, 'attributes'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'roleSid' => Values::array_get($payload, 'role_sid'),
            'identity' => Values::array_get($payload, 'identity'),
            'isOnline' => Values::array_get($payload, 'is_online'),
            'isNotifiable' => Values::array_get($payload, 'is_notifiable'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'joinedChannelsCount' => Values::array_get($payload, 'joined_channels_count'),
            'links' => Values::array_get($payload, 'links'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return UserContext Context for this UserInstance
     */
    protected function proxy(): UserContext
    {
        if (!$this->context) {
            $this->context = new UserContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the UserInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the UserInstance
     *
     * @return UserInstance Fetched UserInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): UserInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Update the UserInstance
     *
     * @param array|Options $options Optional Arguments
     * @return UserInstance Updated UserInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): UserInstance
    {

        return $this->proxy()->update($options);
    }

    /**
     * Access the userChannels
     */
    protected function getUserChannels(): UserChannelList
    {
        return $this->proxy()->userChannels;
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
        return '[Twilio.Chat.V1.UserInstance ' . \implode(' ', $context) . ']';
    }
}

