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
 * This file is part of FPDI
 *
 * @package   setasign\Fpdi
 * @copyright Copyright (c) 2023 Setasign GmbH & Co. KG (https://www.setasign.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace setasign\Fpdi\PdfParser;

use setasign\Fpdi\FpdiException;

/**
 * Exception for the pdf parser class
 */
class PdfParserException extends FpdiException
{
    /**
     * @var int
     */
    const NOT_IMPLEMENTED = 0x0001;

    /**
     * @var int
     */
    const IMPLEMENTED_IN_FPDI_PDF_PARSER = 0x0002;

    /**
     * @var int
     */
    const INVALID_DATA_TYPE = 0x0003;

    /**
     * @var int
     */
    const FILE_HEADER_NOT_FOUND = 0x0004;

    /**
     * @var int
     */
    const PDF_VERSION_NOT_FOUND = 0x0005;

    /**
     * @var int
     */
    const INVALID_DATA_SIZE = 0x0006;
}
