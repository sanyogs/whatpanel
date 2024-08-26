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
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Preview\DeployedDevices;

use Twilio\Options;
use Twilio\Values;

abstract class FleetOptions
{
    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     * @return CreateFleetOptions Options builder
     */
    public static function create(
        
        string $friendlyName = Values::NONE

    ): CreateFleetOptions
    {
        return new CreateFleetOptions(
            $friendlyName
        );
    }




    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     * @param string $defaultDeploymentSid Provides a string identifier of a Deployment that is going to be used as a default one for this Fleet.
     * @return UpdateFleetOptions Options builder
     */
    public static function update(
        
        string $friendlyName = Values::NONE,
        string $defaultDeploymentSid = Values::NONE

    ): UpdateFleetOptions
    {
        return new UpdateFleetOptions(
            $friendlyName,
            $defaultDeploymentSid
        );
    }

}

class CreateFleetOptions extends Options
    {
    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     *
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Preview.DeployedDevices.CreateFleetOptions ' . $options . ']';
    }
}




class UpdateFleetOptions extends Options
    {
    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     * @param string $defaultDeploymentSid Provides a string identifier of a Deployment that is going to be used as a default one for this Fleet.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $defaultDeploymentSid = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['defaultDeploymentSid'] = $defaultDeploymentSid;
    }

    /**
     * Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     *
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provides a string identifier of a Deployment that is going to be used as a default one for this Fleet.
     *
     * @param string $defaultDeploymentSid Provides a string identifier of a Deployment that is going to be used as a default one for this Fleet.
     * @return $this Fluent Builder
     */
    public function setDefaultDeploymentSid(string $defaultDeploymentSid): self
    {
        $this->options['defaultDeploymentSid'] = $defaultDeploymentSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Preview.DeployedDevices.UpdateFleetOptions ' . $options . ']';
    }
}

