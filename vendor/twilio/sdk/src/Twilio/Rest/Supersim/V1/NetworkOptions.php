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
 * Twilio - Supersim
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Supersim\V1;

use Twilio\Options;
use Twilio\Values;

abstract class NetworkOptions
{

    /**
     * @param string $isoCountry The [ISO country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) of the Network resources to read.
     * @param string $mcc The 'mobile country code' of a country. Network resources with this `mcc` in their `identifiers` will be read.
     * @param string $mnc The 'mobile network code' of a mobile operator network. Network resources with this `mnc` in their `identifiers` will be read.
     * @return ReadNetworkOptions Options builder
     */
    public static function read(
        
        string $isoCountry = Values::NONE,
        string $mcc = Values::NONE,
        string $mnc = Values::NONE

    ): ReadNetworkOptions
    {
        return new ReadNetworkOptions(
            $isoCountry,
            $mcc,
            $mnc
        );
    }

}


class ReadNetworkOptions extends Options
    {
    /**
     * @param string $isoCountry The [ISO country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) of the Network resources to read.
     * @param string $mcc The 'mobile country code' of a country. Network resources with this `mcc` in their `identifiers` will be read.
     * @param string $mnc The 'mobile network code' of a mobile operator network. Network resources with this `mnc` in their `identifiers` will be read.
     */
    public function __construct(
        
        string $isoCountry = Values::NONE,
        string $mcc = Values::NONE,
        string $mnc = Values::NONE

    ) {
        $this->options['isoCountry'] = $isoCountry;
        $this->options['mcc'] = $mcc;
        $this->options['mnc'] = $mnc;
    }

    /**
     * The [ISO country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) of the Network resources to read.
     *
     * @param string $isoCountry The [ISO country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) of the Network resources to read.
     * @return $this Fluent Builder
     */
    public function setIsoCountry(string $isoCountry): self
    {
        $this->options['isoCountry'] = $isoCountry;
        return $this;
    }

    /**
     * The 'mobile country code' of a country. Network resources with this `mcc` in their `identifiers` will be read.
     *
     * @param string $mcc The 'mobile country code' of a country. Network resources with this `mcc` in their `identifiers` will be read.
     * @return $this Fluent Builder
     */
    public function setMcc(string $mcc): self
    {
        $this->options['mcc'] = $mcc;
        return $this;
    }

    /**
     * The 'mobile network code' of a mobile operator network. Network resources with this `mnc` in their `identifiers` will be read.
     *
     * @param string $mnc The 'mobile network code' of a mobile operator network. Network resources with this `mnc` in their `identifiers` will be read.
     * @return $this Fluent Builder
     */
    public function setMnc(string $mnc): self
    {
        $this->options['mnc'] = $mnc;
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
        return '[Twilio.Supersim.V1.ReadNetworkOptions ' . $options . ']';
    }
}

