<?php 
/*
 * This file is part of WHATPANEL.
 *
 * @package     WHAT PANEL – Web Hosting Application Terminal Panel.
 * @copyright   2023-2024 Version Next Technologies and MadPopo. All rights reserved.
 * @license     BSL; see LICENSE.txt
 * @link        https://www.version-next.com
 */
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest;

use Twilio\Base\BaseClient as BaseClient;


/**
 * A client for accessing the Twilio API.
 *
 * @property Accounts $accounts
 * @property Api $api
 * @property Bulkexports $bulkexports
 * @property Chat $chat
 * @property Content $content
 * @property Conversations $conversations
 * @property Events $events
 * @property FlexApi $flexApi
 * @property FrontlineApi $frontlineApi
 * @property Insights $insights
 * @property Intelligence $intelligence
 * @property IpMessaging $ipMessaging
 * @property Lookups $lookups
 * @property Media $media
 * @property Messaging $messaging
 * @property Microvisor $microvisor
 * @property Monitor $monitor
 * @property Notify $notify
 * @property Numbers $numbers
 * @property Preview $preview
 * @property Pricing $pricing
 * @property Proxy $proxy
 * @property Routes $routes
 * @property Serverless $serverless
 * @property Studio $studio
 * @property Supersim $supersim
 * @property Sync $sync
 * @property Taskrouter $taskrouter
 * @property Trunking $trunking
 * @property Trusthub $trusthub
 * @property Verify $verify
 * @property Video $video
 * @property Voice $voice
 * @property Wireless $wireless
 * @property \Twilio\Rest\Api\V2010\Account\AddressList $addresses
 * @property \Twilio\Rest\Api\V2010\Account\ApplicationList $applications
 * @property \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList $authorizedConnectApps
 * @property \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList $availablePhoneNumbers
 * @property \Twilio\Rest\Api\V2010\Account\BalanceList $balance
 * @property \Twilio\Rest\Api\V2010\Account\CallList $calls
 * @property \Twilio\Rest\Api\V2010\Account\ConferenceList $conferences
 * @property \Twilio\Rest\Api\V2010\Account\ConnectAppList $connectApps
 * @property \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList $incomingPhoneNumbers
 * @property \Twilio\Rest\Api\V2010\Account\KeyList $keys
 * @property \Twilio\Rest\Api\V2010\Account\MessageList $messages
 * @property \Twilio\Rest\Api\V2010\Account\NewKeyList $newKeys
 * @property \Twilio\Rest\Api\V2010\Account\NewSigningKeyList $newSigningKeys
 * @property \Twilio\Rest\Api\V2010\Account\NotificationList $notifications
 * @property \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList $outgoingCallerIds
 * @property \Twilio\Rest\Api\V2010\Account\QueueList $queues
 * @property \Twilio\Rest\Api\V2010\Account\RecordingList $recordings
 * @property \Twilio\Rest\Api\V2010\Account\ShortCodeList $shortCodes
 * @property \Twilio\Rest\Api\V2010\Account\SigningKeyList $signingKeys
 * @property \Twilio\Rest\Api\V2010\Account\SipList $sip
 * @property \Twilio\Rest\Api\V2010\Account\TokenList $tokens
 * @property \Twilio\Rest\Api\V2010\Account\TranscriptionList $transcriptions
 * @property \Twilio\Rest\Api\V2010\Account\UsageList $usage
 * @property \Twilio\Rest\Api\V2010\Account\ValidationRequestList $validationRequests
 * @method \Twilio\Rest\Api\V2010\Account\AddressContext Addresses(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ApplicationContext Applications(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppContext AuthorizedConnectApps(string $connectAppSid)
 * @method \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryContext AvailablePhoneNumbers(string $countryCode)
 * @method \Twilio\Rest\Api\V2010\Account\CallContext Calls(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ConferenceContext Conferences(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ConnectAppContext ConnectApps(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberContext IncomingPhoneNumbers(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\KeyContext Keys(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\MessageContext Messages(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\NotificationContext Notifications(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdContext OutgoingCallerIds(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\QueueContext Queues(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\RecordingContext Recordings(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ShortCodeContext ShortCodes(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\SigningKeyContext SigningKeys(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\TranscriptionContext Transcriptions(string $sid)
 */

class Client extends BaseClient {
    protected $_accounts;
    protected $_api;
    protected $_bulkexports;
    protected $_chat;
    protected $_content;
    protected $_conversations;
    protected $_events;
    protected $_flexApi;
    protected $_frontlineApi;
    protected $_insights;
    protected $_intelligence;
    protected $_ipMessaging;
    protected $_lookups;
    protected $_media;
    protected $_messaging;
    protected $_microvisor;
    protected $_monitor;
    protected $_notify;
    protected $_numbers;
    protected $_preview;
    protected $_pricing;
    protected $_proxy;
    protected $_routes;
    protected $_serverless;
    protected $_studio;
    protected $_supersim;
    protected $_sync;
    protected $_taskrouter;
    protected $_trunking;
    protected $_trusthub;
    protected $_verify;
    protected $_video;
    protected $_voice;
    protected $_wireless;

    /**
     * Access the Accounts Twilio Domain
     *
     * @return Accounts Accounts Twilio Domain
     */
    protected function getAccounts(): Accounts {
        if (!$this->_accounts) {
            $this->_accounts = new Accounts($this);
        }
        return $this->_accounts;
    }
    /**
     * Access the Api Twilio Domain
     *
     * @return Api Api Twilio Domain
     */
    protected function getApi(): Api {
        if (!$this->_api) {
            $this->_api = new Api($this);
        }
        return $this->_api;
    }
    /**
     * Access the Bulkexports Twilio Domain
     *
     * @return Bulkexports Bulkexports Twilio Domain
     */
    protected function getBulkexports(): Bulkexports {
        if (!$this->_bulkexports) {
            $this->_bulkexports = new Bulkexports($this);
        }
        return $this->_bulkexports;
    }
    /**
     * Access the Chat Twilio Domain
     *
     * @return Chat Chat Twilio Domain
     */
    protected function getChat(): Chat {
        if (!$this->_chat) {
            $this->_chat = new Chat($this);
        }
        return $this->_chat;
    }
    /**
     * Access the Content Twilio Domain
     *
     * @return Content Content Twilio Domain
     */
    protected function getContent(): Content {
        if (!$this->_content) {
            $this->_content = new Content($this);
        }
        return $this->_content;
    }
    /**
     * Access the Conversations Twilio Domain
     *
     * @return Conversations Conversations Twilio Domain
     */
    protected function getConversations(): Conversations {
        if (!$this->_conversations) {
            $this->_conversations = new Conversations($this);
        }
        return $this->_conversations;
    }
    /**
     * Access the Events Twilio Domain
     *
     * @return Events Events Twilio Domain
     */
    protected function getEvents(): Events {
        if (!$this->_events) {
            $this->_events = new Events($this);
        }
        return $this->_events;
    }
    /**
     * Access the FlexApi Twilio Domain
     *
     * @return FlexApi FlexApi Twilio Domain
     */
    protected function getFlexApi(): FlexApi {
        if (!$this->_flexApi) {
            $this->_flexApi = new FlexApi($this);
        }
        return $this->_flexApi;
    }
    /**
     * Access the FrontlineApi Twilio Domain
     *
     * @return FrontlineApi FrontlineApi Twilio Domain
     */
    protected function getFrontlineApi(): FrontlineApi {
        if (!$this->_frontlineApi) {
            $this->_frontlineApi = new FrontlineApi($this);
        }
        return $this->_frontlineApi;
    }
    /**
     * Access the Insights Twilio Domain
     *
     * @return Insights Insights Twilio Domain
     */
    protected function getInsights(): Insights {
        if (!$this->_insights) {
            $this->_insights = new Insights($this);
        }
        return $this->_insights;
    }
    /**
     * Access the Intelligence Twilio Domain
     *
     * @return Intelligence Intelligence Twilio Domain
     */
    protected function getIntelligence(): Intelligence {
        if (!$this->_intelligence) {
            $this->_intelligence = new Intelligence($this);
        }
        return $this->_intelligence;
    }
    /**
     * Access the IpMessaging Twilio Domain
     *
     * @return IpMessaging IpMessaging Twilio Domain
     */
    protected function getIpMessaging(): IpMessaging {
        if (!$this->_ipMessaging) {
            $this->_ipMessaging = new IpMessaging($this);
        }
        return $this->_ipMessaging;
    }
    /**
     * Access the Lookups Twilio Domain
     *
     * @return Lookups Lookups Twilio Domain
     */
    protected function getLookups(): Lookups {
        if (!$this->_lookups) {
            $this->_lookups = new Lookups($this);
        }
        return $this->_lookups;
    }
    /**
     * Access the Media Twilio Domain
     *
     * @return Media Media Twilio Domain
     */
    protected function getMedia(): Media {
        if (!$this->_media) {
            $this->_media = new Media($this);
        }
        return $this->_media;
    }
    /**
     * Access the Messaging Twilio Domain
     *
     * @return Messaging Messaging Twilio Domain
     */
    protected function getMessaging(): Messaging {
        if (!$this->_messaging) {
            $this->_messaging = new Messaging($this);
        }
        return $this->_messaging;
    }
    /**
     * Access the Microvisor Twilio Domain
     *
     * @return Microvisor Microvisor Twilio Domain
     */
    protected function getMicrovisor(): Microvisor {
        if (!$this->_microvisor) {
            $this->_microvisor = new Microvisor($this);
        }
        return $this->_microvisor;
    }
    /**
     * Access the Monitor Twilio Domain
     *
     * @return Monitor Monitor Twilio Domain
     */
    protected function getMonitor(): Monitor {
        if (!$this->_monitor) {
            $this->_monitor = new Monitor($this);
        }
        return $this->_monitor;
    }
    /**
     * Access the Notify Twilio Domain
     *
     * @return Notify Notify Twilio Domain
     */
    protected function getNotify(): Notify {
        if (!$this->_notify) {
            $this->_notify = new Notify($this);
        }
        return $this->_notify;
    }
    /**
     * Access the Numbers Twilio Domain
     *
     * @return Numbers Numbers Twilio Domain
     */
    protected function getNumbers(): Numbers {
        if (!$this->_numbers) {
            $this->_numbers = new Numbers($this);
        }
        return $this->_numbers;
    }
    /**
     * Access the Preview Twilio Domain
     *
     * @return Preview Preview Twilio Domain
     */
    protected function getPreview(): Preview {
        if (!$this->_preview) {
            $this->_preview = new Preview($this);
        }
        return $this->_preview;
    }
    /**
     * Access the Pricing Twilio Domain
     *
     * @return Pricing Pricing Twilio Domain
     */
    protected function getPricing(): Pricing {
        if (!$this->_pricing) {
            $this->_pricing = new Pricing($this);
        }
        return $this->_pricing;
    }
    /**
     * Access the Proxy Twilio Domain
     *
     * @return Proxy Proxy Twilio Domain
     */
    protected function getProxy(): Proxy {
        if (!$this->_proxy) {
            $this->_proxy = new Proxy($this);
        }
        return $this->_proxy;
    }
    /**
     * Access the Routes Twilio Domain
     *
     * @return Routes Routes Twilio Domain
     */
    protected function getRoutes(): Routes {
        if (!$this->_routes) {
            $this->_routes = new Routes($this);
        }
        return $this->_routes;
    }
    /**
     * Access the Serverless Twilio Domain
     *
     * @return Serverless Serverless Twilio Domain
     */
    protected function getServerless(): Serverless {
        if (!$this->_serverless) {
            $this->_serverless = new Serverless($this);
        }
        return $this->_serverless;
    }
    /**
     * Access the Studio Twilio Domain
     *
     * @return Studio Studio Twilio Domain
     */
    protected function getStudio(): Studio {
        if (!$this->_studio) {
            $this->_studio = new Studio($this);
        }
        return $this->_studio;
    }
    /**
     * Access the Supersim Twilio Domain
     *
     * @return Supersim Supersim Twilio Domain
     */
    protected function getSupersim(): Supersim {
        if (!$this->_supersim) {
            $this->_supersim = new Supersim($this);
        }
        return $this->_supersim;
    }
    /**
     * Access the Sync Twilio Domain
     *
     * @return Sync Sync Twilio Domain
     */
    protected function getSync(): Sync {
        if (!$this->_sync) {
            $this->_sync = new Sync($this);
        }
        return $this->_sync;
    }
    /**
     * Access the Taskrouter Twilio Domain
     *
     * @return Taskrouter Taskrouter Twilio Domain
     */
    protected function getTaskrouter(): Taskrouter {
        if (!$this->_taskrouter) {
            $this->_taskrouter = new Taskrouter($this);
        }
        return $this->_taskrouter;
    }
    /**
     * Access the Trunking Twilio Domain
     *
     * @return Trunking Trunking Twilio Domain
     */
    protected function getTrunking(): Trunking {
        if (!$this->_trunking) {
            $this->_trunking = new Trunking($this);
        }
        return $this->_trunking;
    }
    /**
     * Access the Trusthub Twilio Domain
     *
     * @return Trusthub Trusthub Twilio Domain
     */
    protected function getTrusthub(): Trusthub {
        if (!$this->_trusthub) {
            $this->_trusthub = new Trusthub($this);
        }
        return $this->_trusthub;
    }
    /**
     * Access the Verify Twilio Domain
     *
     * @return Verify Verify Twilio Domain
     */
    protected function getVerify(): Verify {
        if (!$this->_verify) {
            $this->_verify = new Verify($this);
        }
        return $this->_verify;
    }
    /**
     * Access the Video Twilio Domain
     *
     * @return Video Video Twilio Domain
     */
    protected function getVideo(): Video {
        if (!$this->_video) {
            $this->_video = new Video($this);
        }
        return $this->_video;
    }
    /**
     * Access the Voice Twilio Domain
     *
     * @return Voice Voice Twilio Domain
     */
    protected function getVoice(): Voice {
        if (!$this->_voice) {
            $this->_voice = new Voice($this);
        }
        return $this->_voice;
    }
    /**
     * Access the Wireless Twilio Domain
     *
     * @return Wireless Wireless Twilio Domain
     */
    protected function getWireless(): Wireless {
        if (!$this->_wireless) {
            $this->_wireless = new Wireless($this);
        }
        return $this->_wireless;
    }
    protected function getAddresses(): \Twilio\Rest\Api\V2010\Account\AddressList {
        return $this->api->v2010->account->addresses;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the Address resource to fetch.
    */
    protected function contextAddresses(string $sid): \Twilio\Rest\Api\V2010\Account\AddressContext {
        return $this->api->v2010->account->addresses($sid);
    }
    protected function getApplications(): \Twilio\Rest\Api\V2010\Account\ApplicationList {
        return $this->api->v2010->account->applications;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the Application resource to fetch.
    */
    protected function contextApplications(string $sid): \Twilio\Rest\Api\V2010\Account\ApplicationContext {
        return $this->api->v2010->account->applications($sid);
    }
    protected function getAuthorizedConnectApps(): \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList {
        return $this->api->v2010->account->authorizedConnectApps;
    }
    /**
     * @param string $connectAppSid The SID of the Connect App to fetch.
    */
    protected function contextAuthorizedConnectApps(string $connectAppSid): \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppContext {
        return $this->api->v2010->account->authorizedConnectApps($connectAppSid);
    }
    protected function getAvailablePhoneNumbers(): \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList {
        return $this->api->v2010->account->availablePhoneNumbers;
    }
    /**
     * @param string $countryCode The [ISO-3166-1](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code of the country to fetch available phone number information about.
    */
    protected function contextAvailablePhoneNumbers(string $countryCode): \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryContext {
        return $this->api->v2010->account->availablePhoneNumbers($countryCode);
    }
    protected function getBalance(): \Twilio\Rest\Api\V2010\Account\BalanceList {
        return $this->api->v2010->account->balance;
    }
    protected function getCalls(): \Twilio\Rest\Api\V2010\Account\CallList {
        return $this->api->v2010->account->calls;
    }
    /**
     * @param string $sid The SID of the Call resource to fetch.
    */
    protected function contextCalls(string $sid): \Twilio\Rest\Api\V2010\Account\CallContext {
        return $this->api->v2010->account->calls($sid);
    }
    protected function getConferences(): \Twilio\Rest\Api\V2010\Account\ConferenceList {
        return $this->api->v2010->account->conferences;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the Conference resource to fetch
    */
    protected function contextConferences(string $sid): \Twilio\Rest\Api\V2010\Account\ConferenceContext {
        return $this->api->v2010->account->conferences($sid);
    }
    protected function getConnectApps(): \Twilio\Rest\Api\V2010\Account\ConnectAppList {
        return $this->api->v2010->account->connectApps;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the ConnectApp resource to fetch.
    */
    protected function contextConnectApps(string $sid): \Twilio\Rest\Api\V2010\Account\ConnectAppContext {
        return $this->api->v2010->account->connectApps($sid);
    }
    protected function getIncomingPhoneNumbers(): \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList {
        return $this->api->v2010->account->incomingPhoneNumbers;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the IncomingPhoneNumber resource to fetch.
    */
    protected function contextIncomingPhoneNumbers(string $sid): \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberContext {
        return $this->api->v2010->account->incomingPhoneNumbers($sid);
    }
    protected function getKeys(): \Twilio\Rest\Api\V2010\Account\KeyList {
        return $this->api->v2010->account->keys;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the Key resource to fetch.
    */
    protected function contextKeys(string $sid): \Twilio\Rest\Api\V2010\Account\KeyContext {
        return $this->api->v2010->account->keys($sid);
    }
    protected function getMessages(): \Twilio\Rest\Api\V2010\Account\MessageList {
        return $this->api->v2010->account->messages;
    }
    /**
     * @param string $sid The SID of the Message resource to be fetched
    */
    protected function contextMessages(string $sid): \Twilio\Rest\Api\V2010\Account\MessageContext {
        return $this->api->v2010->account->messages($sid);
    }
    protected function getNewKeys(): \Twilio\Rest\Api\V2010\Account\NewKeyList {
        return $this->api->v2010->account->newKeys;
    }
    protected function getNewSigningKeys(): \Twilio\Rest\Api\V2010\Account\NewSigningKeyList {
        return $this->api->v2010->account->newSigningKeys;
    }
    protected function getNotifications(): \Twilio\Rest\Api\V2010\Account\NotificationList {
        return $this->api->v2010->account->notifications;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the Notification resource to fetch.
    */
    protected function contextNotifications(string $sid): \Twilio\Rest\Api\V2010\Account\NotificationContext {
        return $this->api->v2010->account->notifications($sid);
    }
    protected function getOutgoingCallerIds(): \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList {
        return $this->api->v2010->account->outgoingCallerIds;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the OutgoingCallerId resource to fetch.
    */
    protected function contextOutgoingCallerIds(string $sid): \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdContext {
        return $this->api->v2010->account->outgoingCallerIds($sid);
    }
    protected function getQueues(): \Twilio\Rest\Api\V2010\Account\QueueList {
        return $this->api->v2010->account->queues;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the Queue resource to fetch
    */
    protected function contextQueues(string $sid): \Twilio\Rest\Api\V2010\Account\QueueContext {
        return $this->api->v2010->account->queues($sid);
    }
    protected function getRecordings(): \Twilio\Rest\Api\V2010\Account\RecordingList {
        return $this->api->v2010->account->recordings;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the Recording resource to fetch.
    */
    protected function contextRecordings(string $sid): \Twilio\Rest\Api\V2010\Account\RecordingContext {
        return $this->api->v2010->account->recordings($sid);
    }
    protected function getShortCodes(): \Twilio\Rest\Api\V2010\Account\ShortCodeList {
        return $this->api->v2010->account->shortCodes;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the ShortCode resource to fetch
    */
    protected function contextShortCodes(string $sid): \Twilio\Rest\Api\V2010\Account\ShortCodeContext {
        return $this->api->v2010->account->shortCodes($sid);
    }
    protected function getSigningKeys(): \Twilio\Rest\Api\V2010\Account\SigningKeyList {
        return $this->api->v2010->account->signingKeys;
    }
    /**
     * @param string $sid The sid
    */
    protected function contextSigningKeys(string $sid): \Twilio\Rest\Api\V2010\Account\SigningKeyContext {
        return $this->api->v2010->account->signingKeys($sid);
    }
    protected function getSip(): \Twilio\Rest\Api\V2010\Account\SipList {
        return $this->api->v2010->account->sip;
    }
    protected function getTokens(): \Twilio\Rest\Api\V2010\Account\TokenList {
        return $this->api->v2010->account->tokens;
    }
    protected function getTranscriptions(): \Twilio\Rest\Api\V2010\Account\TranscriptionList {
        return $this->api->v2010->account->transcriptions;
    }
    /**
     * @param string $sid The Twilio-provided string that uniquely identifies the Transcription resource to fetch.
    */
    protected function contextTranscriptions(string $sid): \Twilio\Rest\Api\V2010\Account\TranscriptionContext {
        return $this->api->v2010->account->transcriptions($sid);
    }
    protected function getUsage(): \Twilio\Rest\Api\V2010\Account\UsageList {
        return $this->api->v2010->account->usage;
    }
    protected function getValidationRequests(): \Twilio\Rest\Api\V2010\Account\ValidationRequestList {
        return $this->api->v2010->account->validationRequests;
    }
}
