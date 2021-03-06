<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_NaftaImporterSpecificationType
    extends FedEx_AbstractSimpleType
{
    const _IMPORTER_OF_RECORD = 'IMPORTER_OF_RECORD';
    const _RECIPIENT = 'RECIPIENT';
    const _UNKNOWN = 'UNKNOWN';
    const _VARIOUS = 'VARIOUS';
}