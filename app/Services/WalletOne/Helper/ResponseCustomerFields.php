<?php

namespace Mautab\Services\WalletOne\Helper;

/**
 * Class ResponseCustomerFields
 * @package Mautab\Services\Helper\WalletOne
 */
trait ResponseCustomerFields
{

    /**
     * @param string $valueName
     *
     * @return string|null
     */
    public function getCustomerValue($valueName)
    {
        if ($valueName) {
            $valueName = "CUSTOMER_{$valueName}";
            if (isset($this->responseData[$valueName])) {
                return $this->responseData[$valueName];
            }
        }
        return null;
    }

}