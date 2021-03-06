<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This class groups together all shipment-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ShipmentRating
    extends FedEx_AbstractComplexType
{

    /**
     * This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.
     *
     * @param ReturnedRateType $ActualRateType
     * return FedEx_ShipService_ShipmentRating
     */
    public function setActualRateType(FedEx_ShipService_ReturnedRateType $actualRateType)
    {
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    
    /**
     * The "list" total net charge minus "actual" total net charge.
     *
     * @param Money $EffectiveNetDiscount
     * return FedEx_ShipService_ShipmentRating
     */
    public function setEffectiveNetDiscount(FedEx_ShipService_Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Each element of this field provides shipment-level rate totals for a specific rate type.
     *
     * @param array[ShipmentRateDetail] $ShipmentRateDetails
     * return FedEx_ShipService_ShipmentRating
     */
    public function setShipmentRateDetails(array $shipmentRateDetails)
    {
        $this->ShipmentRateDetails = $shipmentRateDetails;
        return $this;
    }
    

    
}