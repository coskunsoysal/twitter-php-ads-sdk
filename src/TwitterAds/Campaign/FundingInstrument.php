<?php

namespace Hborras\TwitterAdsSDK\TwitterAds\Campaign;

use Hborras\TwitterAdsSDK\TwitterAds\Resource;

/**
 * Created by PhpStorm.
 * User: hborras
 * Date: 3/04/16
 * Time: 10:43.
 */
class FundingInstrument extends Resource
{
    const RESOURCE_COLLECTION = 'accounts/{account_id}/funding_instruments';
    const RESOURCE = 'accounts/{account_id}/funding_instruments/{id}';

    protected $id;
    protected $name;
    protected $cancelled;
    protected $credit_limit_local_micro;
    protected $currency;
    protected $description;
    protected $funded_amount_local_micro;
    protected $type;
    protected $created_at;
    protected $updated_at;
    protected $deleted;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCancelled()
    {
        return $this->cancelled;
    }

    /**
     * @return mixed
     */
    public function getCreditLimitLocalMicro()
    {
        return $this->credit_limit_local_micro;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getFundedAmountLocalMicro()
    {
        return $this->funded_amount_local_micro;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
