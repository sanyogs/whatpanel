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


namespace Twilio\Rest\FlexApi\V1\PluginConfiguration;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string|null $accountSid
 * @property string|null $configurationSid
 * @property string|null $pluginSid
 * @property string|null $pluginVersionSid
 * @property int|null $phase
 * @property string|null $pluginUrl
 * @property string|null $uniqueName
 * @property string|null $friendlyName
 * @property string|null $description
 * @property bool|null $pluginArchived
 * @property string|null $version
 * @property string|null $changelog
 * @property bool|null $pluginVersionArchived
 * @property bool|null $private
 * @property \DateTime|null $dateCreated
 * @property string|null $url
 */
class ConfiguredPluginInstance extends InstanceResource
{
    /**
     * Initialize the ConfiguredPluginInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $configurationSid The SID of the Flex Plugin Configuration the resource to belongs to.
     * @param string $pluginSid The unique string that we created to identify the Flex Plugin resource.
     */
    public function __construct(Version $version, array $payload, string $configurationSid, string $pluginSid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'configurationSid' => Values::array_get($payload, 'configuration_sid'),
            'pluginSid' => Values::array_get($payload, 'plugin_sid'),
            'pluginVersionSid' => Values::array_get($payload, 'plugin_version_sid'),
            'phase' => Values::array_get($payload, 'phase'),
            'pluginUrl' => Values::array_get($payload, 'plugin_url'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'description' => Values::array_get($payload, 'description'),
            'pluginArchived' => Values::array_get($payload, 'plugin_archived'),
            'version' => Values::array_get($payload, 'version'),
            'changelog' => Values::array_get($payload, 'changelog'),
            'pluginVersionArchived' => Values::array_get($payload, 'plugin_version_archived'),
            'private' => Values::array_get($payload, 'private'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['configurationSid' => $configurationSid, 'pluginSid' => $pluginSid ?: $this->properties['pluginSid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ConfiguredPluginContext Context for this ConfiguredPluginInstance
     */
    protected function proxy(): ConfiguredPluginContext
    {
        if (!$this->context) {
            $this->context = new ConfiguredPluginContext(
                $this->version,
                $this->solution['configurationSid'],
                $this->solution['pluginSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the ConfiguredPluginInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ConfiguredPluginInstance Fetched ConfiguredPluginInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): ConfiguredPluginInstance
    {

        return $this->proxy()->fetch($options);
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
        return '[Twilio.FlexApi.V1.ConfiguredPluginInstance ' . \implode(' ', $context) . ']';
    }
}

