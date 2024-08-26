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

abstract class PluginArchiveOptions
{
    /**
     * @param string $flexMetadata The Flex-Metadata HTTP request header
     * @return UpdatePluginArchiveOptions Options builder
     */
    public static function update(
        
        string $flexMetadata = Values::NONE

    ): UpdatePluginArchiveOptions
    {
        return new UpdatePluginArchiveOptions(
            $flexMetadata
        );
    }

}

class UpdatePluginArchiveOptions extends Options
    {
    /**
     * @param string $flexMetadata The Flex-Metadata HTTP request header
     */
    public function __construct(
        
        string $flexMetadata = Values::NONE

    ) {
        $this->options['flexMetadata'] = $flexMetadata;
    }

    /**
     * The Flex-Metadata HTTP request header
     *
     * @param string $flexMetadata The Flex-Metadata HTTP request header
     * @return $this Fluent Builder
     */
    public function setFlexMetadata(string $flexMetadata): self
    {
        $this->options['flexMetadata'] = $flexMetadata;
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
        return '[Twilio.FlexApi.V1.UpdatePluginArchiveOptions ' . $options . ']';
    }
}

