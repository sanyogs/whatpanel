<?php 
/*
 * This file is part of WHATPANEL.
 *
 * @package     WHAT PANEL – Web Hosting Application Terminal Panel.
 * @copyright   2023-2024 Version Next Technologies and MadPopo. All rights reserved.
 * @license     BSL; see LICENSE.txt
 * @link        https://www.version-next.com
 */
// Copyright 1999-2023. Plesk International GmbH.

namespace PleskX\Api\Struct\Webspace;

use PleskX\Api\AbstractStruct;

class PermissionDescriptor extends AbstractStruct
{
    public array $permissions;

    public function __construct(\SimpleXMLElement $apiResponse)
    {
        $this->permissions = [];

        foreach ($apiResponse->descriptor->property as $propertyInfo) {
            $this->permissions[(string) $propertyInfo->name] = new PermissionInfo($propertyInfo);
        }
    }
}
