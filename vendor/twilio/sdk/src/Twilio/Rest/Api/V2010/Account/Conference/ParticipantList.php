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
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Api\V2010\Account\Conference;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;
use Twilio\Serialize;


class ParticipantList extends ListResource
    {
    /**
     * Construct the ParticipantList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will create the resource.
     * @param string $conferenceSid The SID of the participant's conference.
     */
    public function __construct(
        Version $version,
        string $accountSid,
        string $conferenceSid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'accountSid' =>
            $accountSid,
        
        'conferenceSid' =>
            $conferenceSid,
        
        ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid)
        .'/Conferences/' . \rawurlencode($conferenceSid)
        .'/Participants.json';
    }

    /**
     * Create the ParticipantInstance
     *
     * @param string $from The phone number, Client identifier, or username portion of SIP address that made this call. Phone numbers are in [E.164](https://www.twilio.com/docs/glossary/what-e164) format (e.g., +16175551212). Client identifiers are formatted `client:name`. If using a phone number, it must be a Twilio number or a Verified [outgoing caller id](https://www.twilio.com/docs/voice/api/outgoing-caller-ids) for your account. If the `to` parameter is a phone number, `from` must also be a phone number. If `to` is sip address, this value of `from` should be a username portion to be used to populate the P-Asserted-Identity header that is passed to the SIP endpoint.
     * @param string $to The phone number, SIP address, or Client identifier that received this call. Phone numbers are in [E.164](https://www.twilio.com/docs/glossary/what-e164) format (e.g., +16175551212). SIP addresses are formatted as `sip:name@company.com`. Client identifiers are formatted `client:name`. [Custom parameters](https://www.twilio.com/docs/voice/api/conference-participant-resource#custom-parameters) may also be specified.
     * @param array|Options $options Optional Arguments
     * @return ParticipantInstance Created ParticipantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $from, string $to, array $options = []): ParticipantInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'From' =>
                $from,
            'To' =>
                $to,
            'StatusCallback' =>
                $options['statusCallback'],
            'StatusCallbackMethod' =>
                $options['statusCallbackMethod'],
            'StatusCallbackEvent' =>
                Serialize::map($options['statusCallbackEvent'], function ($e) { return $e; }),
            'Label' =>
                $options['label'],
            'Timeout' =>
                $options['timeout'],
            'Record' =>
                Serialize::booleanToString($options['record']),
            'Muted' =>
                Serialize::booleanToString($options['muted']),
            'Beep' =>
                $options['beep'],
            'StartConferenceOnEnter' =>
                Serialize::booleanToString($options['startConferenceOnEnter']),
            'EndConferenceOnExit' =>
                Serialize::booleanToString($options['endConferenceOnExit']),
            'WaitUrl' =>
                $options['waitUrl'],
            'WaitMethod' =>
                $options['waitMethod'],
            'EarlyMedia' =>
                Serialize::booleanToString($options['earlyMedia']),
            'MaxParticipants' =>
                $options['maxParticipants'],
            'ConferenceRecord' =>
                $options['conferenceRecord'],
            'ConferenceTrim' =>
                $options['conferenceTrim'],
            'ConferenceStatusCallback' =>
                $options['conferenceStatusCallback'],
            'ConferenceStatusCallbackMethod' =>
                $options['conferenceStatusCallbackMethod'],
            'ConferenceStatusCallbackEvent' =>
                Serialize::map($options['conferenceStatusCallbackEvent'], function ($e) { return $e; }),
            'RecordingChannels' =>
                $options['recordingChannels'],
            'RecordingStatusCallback' =>
                $options['recordingStatusCallback'],
            'RecordingStatusCallbackMethod' =>
                $options['recordingStatusCallbackMethod'],
            'SipAuthUsername' =>
                $options['sipAuthUsername'],
            'SipAuthPassword' =>
                $options['sipAuthPassword'],
            'Region' =>
                $options['region'],
            'ConferenceRecordingStatusCallback' =>
                $options['conferenceRecordingStatusCallback'],
            'ConferenceRecordingStatusCallbackMethod' =>
                $options['conferenceRecordingStatusCallbackMethod'],
            'RecordingStatusCallbackEvent' =>
                Serialize::map($options['recordingStatusCallbackEvent'], function ($e) { return $e; }),
            'ConferenceRecordingStatusCallbackEvent' =>
                Serialize::map($options['conferenceRecordingStatusCallbackEvent'], function ($e) { return $e; }),
            'Coaching' =>
                Serialize::booleanToString($options['coaching']),
            'CallSidToCoach' =>
                $options['callSidToCoach'],
            'JitterBufferSize' =>
                $options['jitterBufferSize'],
            'Byoc' =>
                $options['byoc'],
            'CallerId' =>
                $options['callerId'],
            'CallReason' =>
                $options['callReason'],
            'RecordingTrack' =>
                $options['recordingTrack'],
            'TimeLimit' =>
                $options['timeLimit'],
            'MachineDetection' =>
                $options['machineDetection'],
            'MachineDetectionTimeout' =>
                $options['machineDetectionTimeout'],
            'MachineDetectionSpeechThreshold' =>
                $options['machineDetectionSpeechThreshold'],
            'MachineDetectionSpeechEndThreshold' =>
                $options['machineDetectionSpeechEndThreshold'],
            'MachineDetectionSilenceTimeout' =>
                $options['machineDetectionSilenceTimeout'],
            'AmdStatusCallback' =>
                $options['amdStatusCallback'],
            'AmdStatusCallbackMethod' =>
                $options['amdStatusCallbackMethod'],
            'Trim' =>
                $options['trim'],
            'CallToken' =>
                $options['callToken'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new ParticipantInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['conferenceSid']
        );
    }


    /**
     * Reads ParticipantInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return ParticipantInstance[] Array of results
     */
    public function read(array $options = [], int $limit = null, $pageSize = null): array
    {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
     * Streams ParticipantInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param array|Options $options Optional Arguments
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(array $options = [], int $limit = null, $pageSize = null): Stream
    {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($options, $limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Retrieve a single page of ParticipantInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return ParticipantPage Page of ParticipantInstance
     */
    public function page(
        array $options = [],
        $pageSize = Values::NONE,
        string $pageToken = Values::NONE,
        $pageNumber = Values::NONE
    ): ParticipantPage
    {
        $options = new Values($options);

        $params = Values::of([
            'Muted' =>
                Serialize::booleanToString($options['muted']),
            'Hold' =>
                Serialize::booleanToString($options['hold']),
            'Coaching' =>
                Serialize::booleanToString($options['coaching']),
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new ParticipantPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of ParticipantInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return ParticipantPage Page of ParticipantInstance
     */
    public function getPage(string $targetUrl): ParticipantPage
    {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new ParticipantPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a ParticipantContext
     *
     * @param string $callSid The [Call](https://www.twilio.com/docs/voice/api/call-resource) SID or label of the participant to delete. Non URL safe characters in a label must be percent encoded, for example, a space character is represented as %20.
     */
    public function getContext(
        string $callSid
        
    ): ParticipantContext
    {
        return new ParticipantContext(
            $this->version,
            $this->solution['accountSid'],
            $this->solution['conferenceSid'],
            $callSid
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        return '[Twilio.Api.V2010.ParticipantList]';
    }
}
