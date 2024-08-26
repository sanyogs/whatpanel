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
 * Twilio - Serverless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Serverless\V1\Service\Environment;

use Twilio\Options;
use Twilio\Values;

abstract class DeploymentOptions
{
    /**
     * @param string $buildSid The SID of the Build for the Deployment.
     * @return CreateDeploymentOptions Options builder
     */
    public static function create(
        
        string $buildSid = Values::NONE

    ): CreateDeploymentOptions
    {
        return new CreateDeploymentOptions(
            $buildSid
        );
    }



}

class CreateDeploymentOptions extends Options
    {
    /**
     * @param string $buildSid The SID of the Build for the Deployment.
     */
    public function __construct(
        
        string $buildSid = Values::NONE

    ) {
        $this->options['buildSid'] = $buildSid;
    }

    /**
     * The SID of the Build for the Deployment.
     *
     * @param string $buildSid The SID of the Build for the Deployment.
     * @return $this Fluent Builder
     */
    public function setBuildSid(string $buildSid): self
    {
        $this->options['buildSid'] = $buildSid;
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
        return '[Twilio.Serverless.V1.CreateDeploymentOptions ' . $options . ']';
    }
}



