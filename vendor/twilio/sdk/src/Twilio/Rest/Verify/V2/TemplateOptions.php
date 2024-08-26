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
 * Twilio - Verify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Verify\V2;

use Twilio\Options;
use Twilio\Values;

abstract class TemplateOptions
{
    /**
     * @param string $friendlyName String filter used to query templates with a given friendly name.
     * @return ReadTemplateOptions Options builder
     */
    public static function read(
        
        string $friendlyName = Values::NONE

    ): ReadTemplateOptions
    {
        return new ReadTemplateOptions(
            $friendlyName
        );
    }

}

class ReadTemplateOptions extends Options
    {
    /**
     * @param string $friendlyName String filter used to query templates with a given friendly name.
     */
    public function __construct(
        
        string $friendlyName = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * String filter used to query templates with a given friendly name.
     *
     * @param string $friendlyName String filter used to query templates with a given friendly name.
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
        return '[Twilio.Verify.V2.ReadTemplateOptions ' . $options . ']';
    }
}

