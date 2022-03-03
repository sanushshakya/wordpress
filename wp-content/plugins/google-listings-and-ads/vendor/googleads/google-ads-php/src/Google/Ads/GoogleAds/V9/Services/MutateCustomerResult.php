<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/customer_service.proto

namespace Google\Ads\GoogleAds\V9\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the customer mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.services.MutateCustomerResult</code>
 */
class MutateCustomerResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The mutated customer with only mutable fields after mutate. The fields will
     * only be returned when response_content_type is set to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.resources.Customer customer = 2;</code>
     */
    protected $customer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V9\Resources\Customer $customer
     *           The mutated customer with only mutable fields after mutate. The fields will
     *           only be returned when response_content_type is set to "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Services\CustomerService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated customer with only mutable fields after mutate. The fields will
     * only be returned when response_content_type is set to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.resources.Customer customer = 2;</code>
     * @return \Google\Ads\GoogleAds\V9\Resources\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    public function hasCustomer()
    {
        return isset($this->customer);
    }

    public function clearCustomer()
    {
        unset($this->customer);
    }

    /**
     * The mutated customer with only mutable fields after mutate. The fields will
     * only be returned when response_content_type is set to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.resources.Customer customer = 2;</code>
     * @param \Google\Ads\GoogleAds\V9\Resources\Customer $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Resources\Customer::class);
        $this->customer = $var;

        return $this;
    }

}

