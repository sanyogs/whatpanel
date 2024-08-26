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
 * Twilio - Taskrouter
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Taskrouter\V1\Workspace;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;


/**
 * @property array|null $realtime
 * @property array|null $cumulative
 * @property string|null $accountSid
 * @property string|null $workspaceSid
 * @property string|null $url
 */
class WorkspaceStatisticsInstance extends InstanceResource
{
    /**
     * Initialize the WorkspaceStatisticsInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $workspaceSid The SID of the Workspace to fetch.
     */
    public function __construct(Version $version, array $payload, string $workspaceSid)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'realtime' => Values::array_get($payload, 'realtime'),
            'cumulative' => Values::array_get($payload, 'cumulative'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'workspaceSid' => Values::array_get($payload, 'workspace_sid'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['workspaceSid' => $workspaceSid, ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return WorkspaceStatisticsContext Context for this WorkspaceStatisticsInstance
     */
    protected function proxy(): WorkspaceStatisticsContext
    {
        if (!$this->context) {
            $this->context = new WorkspaceStatisticsContext(
                $this->version,
                $this->solution['workspaceSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the WorkspaceStatisticsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkspaceStatisticsInstance Fetched WorkspaceStatisticsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []): WorkspaceStatisticsInstance
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
        return '[Twilio.Taskrouter.V1.WorkspaceStatisticsInstance ' . \implode(' ', $context) . ']';
    }
}

