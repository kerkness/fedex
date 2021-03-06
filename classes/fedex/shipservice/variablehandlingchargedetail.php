<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Details about how to calculate variable handling charges at the shipment level.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_VariableHandlingChargeDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The type of handling charge to be calculated and returned in the reply.
     *
     * @param VariableHandlingChargeType $VariableHandlingChargeType
     * return FedEx_ShipService_VariableHandlingChargeDetail
     */
    public function setVariableHandlingChargeType(FedEx_ShipService_VariableHandlingChargeType $variableHandlingChargeType)
    {
        $this->VariableHandlingChargeType = $variableHandlingChargeType;
        return $this;
    }
    
    /**
     * 
                Used with Variable handling charge type of FIXED_VALUE.
                Contains the amount to be added to the freight charge.
                Contains 2 explicit decimal positions with a total max length of 10 including the decimal.
              
     *
     * @param Money $FixedValue
     * return FedEx_ShipService_VariableHandlingChargeDetail
     */
    public function setFixedValue(FedEx_ShipService_Money $fixedValue)
    {
        $this->FixedValue = $fixedValue;
        return $this;
    }
    
    /**
     * Actual percentage (10 means 10%, which is a mutiplier of 0.1)
     *
     * @param decimal $PercentValue
     * return FedEx_ShipService_VariableHandlingChargeDetail
     */
    public function setPercentValue($percentValue)
    {
        $this->PercentValue = $percentValue;
        return $this;
    }
    

    
}