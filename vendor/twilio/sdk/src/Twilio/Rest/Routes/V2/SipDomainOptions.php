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
 * Twilio - Routes
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Routes\V2;

use Twilio\Options;
use Twilio\Values;

abstract class SipDomainOptions
{

    /**
     * @param string $voiceRegion 
     * @param string $friendlyName 
     * @return UpdateSipDomainOptions Options builder
     */
    public static function update(
        
        string $voiceRegion = Values::NONE,
        string $friendlyName = Values::NONE

    ): UpdateSipDomainOptions
    {
        return new UpdateSipDomainOptions(
            $voiceRegion,
            $friendlyName
        );
    }

}


class UpdateSipDomainOptions extends Options
    {
    /**
     * @param string $voiceRegion 
     * @param string $friendlyName 
     */
    public function __construct(
        
        string $voiceRegion = Values::NONE,
        string $friendlyName = Values::NONE

    ) {
        $this->options['voiceRegion'] = $voiceRegion;
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * 
     *
     * @param string $voiceRegion 
     * @return $this Fluent Builder
     */
    public function setVoiceRegion(string $voiceRegion): self
    {
        $this->options['voiceRegion'] = $voiceRegion;
        return $this;
    }

    /**
     * 
     *
     * @param string $friendlyName 
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
        return '[Twilio.Routes.V2.UpdateSipDomainOptions ' . $options . ']';
    }
}

