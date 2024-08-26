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

namespace Twilio\Rest\Preview\Sync\Service;

use Twilio\Options;
use Twilio\Values;

abstract class SyncListOptions
{
    /**
     * @param string $uniqueName 
     * @return CreateSyncListOptions Options builder
     */
    public static function create(
        
        string $uniqueName = Values::NONE

    ): CreateSyncListOptions
    {
        return new CreateSyncListOptions(
            $uniqueName
        );
    }




}

class CreateSyncListOptions extends Options
    {
    /**
     * @param string $uniqueName 
     */
    public function __construct(
        
        string $uniqueName = Values::NONE

    ) {
        $this->options['uniqueName'] = $uniqueName;
    }

    /**
     * 
     *
     * @param string $uniqueName 
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self
    {
        $this->options['uniqueName'] = $uniqueName;
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
        return '[Twilio.Preview.Sync.CreateSyncListOptions ' . $options . ']';
    }
}




