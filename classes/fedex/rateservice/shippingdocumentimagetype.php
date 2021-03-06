<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies the image format used for a shipping document.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_ShippingDocumentImageType
    extends FedEx_AbstractSimpleType
{
    const _DPL = 'DPL';
    const _EPL2 = 'EPL2';
    const _PDF = 'PDF';
    const _PNG = 'PNG';
    const _ZPLII = 'ZPLII';
}