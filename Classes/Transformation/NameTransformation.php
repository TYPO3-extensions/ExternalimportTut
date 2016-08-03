<?php
namespace Cobweb\ExternalimportTut\Transformation;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\SingletonInterface;

/**
 * Example transformation functions for the 'externalimport_tut' extension
 *
 * @author Francois Suter (Cobweb) <typo3@cobweb.ch>
 * @package TYPO3
 * @subpackage tx_externalimporttut
 */
class NameTransformation implements SingletonInterface
{

    /**
     * This method assembles the user's full name
     * At the point where it is called, the name field already contains the last name,
     * so it's just a question of concatenating the first name
     *
     * @param array $record The full record that is being transformed
     * @param string $index The index of the field to transform
     * @param array $params Additional parameters from the TCA
     * @return mixed Full name, i.e. last name and first name concatenated
     */
    public function assembleName($record, $index, $params)
    {
        return $record['last_name'] . ' ' . $record['first_name'];
    }

    /**
     * This method assembles a valid user name
     * At the point where it is called, this field contains the last name,
     * which is not what we want
     *
     * @param array $record The full record that is being transformed
     * @param string $index The index of the field to transform
     * @param array $params Additional parameters from the TCA
     * @return mixed Calculated user name
     */
    public function assembleUserName($record, $index, $params)
    {
        // Make sure the encoding uses the proper code
        $encoding = $GLOBALS['LANG']->csConvObj->parse_charset($params['encoding']);
        // The base for the user name will be the first name, a dot and the last name (lowercase)
        $baseName = $record['first_name'] . '.' . $record['last_name'];
        $userNameBase = $GLOBALS['LANG']->csConvObj->conv_case(
                $encoding,
                $baseName,
                'toLower'
        );
        // We must make sure this doesn't contain non-ASCII characters
        $userName = $GLOBALS['LANG']->csConvObj->specCharsToASCII(
                $encoding,
                $userNameBase
        );
        // Lastly replace single quotes, double quotes or spaces by underscores
        // Other special characters are acceptable
        return preg_replace(
                '/[\'"\s]/',
                '_',
                trim($userName)
        );
    }
}
