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
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Fax;

use Twilio\TwiML\TwiML;

class Receive extends TwiML {
    /**
     * Receive constructor.
     *
     * @param array $attributes Optional attributes
     */
    public function __construct($attributes = []) {
        parent::__construct('Receive', null, $attributes);
    }

    /**
     * Add Action attribute.
     *
     * @param string $action Receive action URL
     */
    public function setAction($action): self {
        return $this->setAttribute('action', $action);
    }

    /**
     * Add Method attribute.
     *
     * @param string $method Receive action URL method
     */
    public function setMethod($method): self {
        return $this->setAttribute('method', $method);
    }

    /**
     * Add MediaType attribute.
     *
     * @param string $mediaType The media type used to store media in the fax media
     *                          store
     */
    public function setMediaType($mediaType): self {
        return $this->setAttribute('mediaType', $mediaType);
    }

    /**
     * Add PageSize attribute.
     *
     * @param string $pageSize What size to interpret received pages as
     */
    public function setPageSize($pageSize): self {
        return $this->setAttribute('pageSize', $pageSize);
    }

    /**
     * Add StoreMedia attribute.
     *
     * @param bool $storeMedia Whether or not to store received media in the fax
     *                         media store
     */
    public function setStoreMedia($storeMedia): self {
        return $this->setAttribute('storeMedia', $storeMedia);
    }
}