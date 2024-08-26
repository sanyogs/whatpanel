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
 * Twilio - Video
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Video\V1;

use Twilio\Options;
use Twilio\Values;

abstract class RecordingOptions
{


    /**
     * @param string $status Read only the recordings that have this status. Can be: `processing`, `completed`, or `deleted`.
     * @param string $sourceSid Read only the recordings that have this `source_sid`.
     * @param string[] $groupingSid Read only recordings with this `grouping_sid`, which may include a `participant_sid` and/or a `room_sid`.
     * @param \DateTime $dateCreatedAfter Read only recordings that started on or after this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time with time zone.
     * @param \DateTime $dateCreatedBefore Read only recordings that started before this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time with time zone, given as `YYYY-MM-DDThh:mm:ss+|-hh:mm` or `YYYY-MM-DDThh:mm:ssZ`.
     * @param string $mediaType Read only recordings that have this media type. Can be either `audio` or `video`.
     * @return ReadRecordingOptions Options builder
     */
    public static function read(
        
        string $status = Values::NONE,
        string $sourceSid = Values::NONE,
        array $groupingSid = Values::ARRAY_NONE,
        \DateTime $dateCreatedAfter = null,
        \DateTime $dateCreatedBefore = null,
        string $mediaType = Values::NONE

    ): ReadRecordingOptions
    {
        return new ReadRecordingOptions(
            $status,
            $sourceSid,
            $groupingSid,
            $dateCreatedAfter,
            $dateCreatedBefore,
            $mediaType
        );
    }

}



class ReadRecordingOptions extends Options
    {
    /**
     * @param string $status Read only the recordings that have this status. Can be: `processing`, `completed`, or `deleted`.
     * @param string $sourceSid Read only the recordings that have this `source_sid`.
     * @param string[] $groupingSid Read only recordings with this `grouping_sid`, which may include a `participant_sid` and/or a `room_sid`.
     * @param \DateTime $dateCreatedAfter Read only recordings that started on or after this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time with time zone.
     * @param \DateTime $dateCreatedBefore Read only recordings that started before this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time with time zone, given as `YYYY-MM-DDThh:mm:ss+|-hh:mm` or `YYYY-MM-DDThh:mm:ssZ`.
     * @param string $mediaType Read only recordings that have this media type. Can be either `audio` or `video`.
     */
    public function __construct(
        
        string $status = Values::NONE,
        string $sourceSid = Values::NONE,
        array $groupingSid = Values::ARRAY_NONE,
        \DateTime $dateCreatedAfter = null,
        \DateTime $dateCreatedBefore = null,
        string $mediaType = Values::NONE

    ) {
        $this->options['status'] = $status;
        $this->options['sourceSid'] = $sourceSid;
        $this->options['groupingSid'] = $groupingSid;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['mediaType'] = $mediaType;
    }

    /**
     * Read only the recordings that have this status. Can be: `processing`, `completed`, or `deleted`.
     *
     * @param string $status Read only the recordings that have this status. Can be: `processing`, `completed`, or `deleted`.
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self
    {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Read only the recordings that have this `source_sid`.
     *
     * @param string $sourceSid Read only the recordings that have this `source_sid`.
     * @return $this Fluent Builder
     */
    public function setSourceSid(string $sourceSid): self
    {
        $this->options['sourceSid'] = $sourceSid;
        return $this;
    }

    /**
     * Read only recordings with this `grouping_sid`, which may include a `participant_sid` and/or a `room_sid`.
     *
     * @param string[] $groupingSid Read only recordings with this `grouping_sid`, which may include a `participant_sid` and/or a `room_sid`.
     * @return $this Fluent Builder
     */
    public function setGroupingSid(array $groupingSid): self
    {
        $this->options['groupingSid'] = $groupingSid;
        return $this;
    }

    /**
     * Read only recordings that started on or after this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time with time zone.
     *
     * @param \DateTime $dateCreatedAfter Read only recordings that started on or after this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time with time zone.
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter(\DateTime $dateCreatedAfter): self
    {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Read only recordings that started before this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time with time zone, given as `YYYY-MM-DDThh:mm:ss+|-hh:mm` or `YYYY-MM-DDThh:mm:ssZ`.
     *
     * @param \DateTime $dateCreatedBefore Read only recordings that started before this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time with time zone, given as `YYYY-MM-DDThh:mm:ss+|-hh:mm` or `YYYY-MM-DDThh:mm:ssZ`.
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore(\DateTime $dateCreatedBefore): self
    {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Read only recordings that have this media type. Can be either `audio` or `video`.
     *
     * @param string $mediaType Read only recordings that have this media type. Can be either `audio` or `video`.
     * @return $this Fluent Builder
     */
    public function setMediaType(string $mediaType): self
    {
        $this->options['mediaType'] = $mediaType;
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
        return '[Twilio.Video.V1.ReadRecordingOptions ' . $options . ']';
    }
}

