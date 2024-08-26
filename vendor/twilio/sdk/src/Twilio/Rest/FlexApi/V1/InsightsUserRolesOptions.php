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

namespace Twilio\Rest\FlexApi\V1;

use Twilio\Options;
use Twilio\Values;

abstract class InsightsUserRolesOptions
{
    /**
     * @param string $authorization The Authorization HTTP request header
     * @return FetchInsightsUserRolesOptions Options builder
     */
    public static function fetch(
        
        string $authorization = Values::NONE

    ): FetchInsightsUserRolesOptions
    {
        return new FetchInsightsUserRolesOptions(
            $authorization
        );
    }

}

class FetchInsightsUserRolesOptions extends Options
    {
    /**
     * @param string $authorization The Authorization HTTP request header
     */
    public function __construct(
        
        string $authorization = Values::NONE

    ) {
        $this->options['authorization'] = $authorization;
    }

    /**
     * The Authorization HTTP request header
     *
     * @param string $authorization The Authorization HTTP request header
     * @return $this Fluent Builder
     */
    public function setAuthorization(string $authorization): self
    {
        $this->options['authorization'] = $authorization;
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
        return '[Twilio.FlexApi.V1.FetchInsightsUserRolesOptions ' . $options . ']';
    }
}

