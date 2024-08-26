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
 * Twilio - Events
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Events\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Events\V1\Schema\SchemaVersionList;


/**
 * @property string|null $id
 * @property string|null $url
 * @property array|null $links
 * @property \DateTime|null $latestVersionDateCreated
 * @property int|null $latestVersion
 */
class SchemaInstance extends InstanceResource
{
    protected $_versions;

    /**
     * Initialize the SchemaInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $id The unique identifier of the schema. Each schema can have multiple versions, that share the same id.
     */
    public function __construct(Version $version, array $payload, string $id = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'id' => Values::array_get($payload, 'id'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
            'latestVersionDateCreated' => Deserialize::dateTime(Values::array_get($payload, 'latest_version_date_created')),
            'latestVersion' => Values::array_get($payload, 'latest_version'),
        ];

        $this->solution = ['id' => $id ?: $this->properties['id'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return SchemaContext Context for this SchemaInstance
     */
    protected function proxy(): SchemaContext
    {
        if (!$this->context) {
            $this->context = new SchemaContext(
                $this->version,
                $this->solution['id']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the SchemaInstance
     *
     * @return SchemaInstance Fetched SchemaInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SchemaInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Access the versions
     */
    protected function getVersions(): SchemaVersionList
    {
        return $this->proxy()->versions;
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
        return '[Twilio.Events.V1.SchemaInstance ' . \implode(' ', $context) . ']';
    }
}

