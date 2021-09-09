<?php

namespace Test\ContactUsCustom\Model;

/**
 * ContactUsCustom Class
 */
class ContactUsCustom extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, \Test\ContactUsCustom\Api\Data\ContactUsCustomInterface
{

    const NOROUTE_ENTITY_ID = 'no-route';

    const CACHE_TAG = 'test_contactuscustom_contactuscustom';

    protected $_cacheTag = 'test_contactuscustom_contactuscustom';

    protected $_eventPrefix = 'test_contactuscustom_contactuscustom';

    /**
     * set resource model
     */
    public function _construct()
    {
        $this->_init(\Test\ContactUsCustom\Model\ResourceModel\ContactUsCustom::class);
    }

    /**
     * Load No-Route Indexer.
     *
     * @return $this
     */
    public function noRouteReasons()
    {
        return $this->load(self::NOROUTE_ENTITY_ID, $this->getIdFieldName());
    }

    /**
     * Get identities.
     *
     * @return []
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG.'_'.$this->getId()];
    }

    /**
     * Set EntityId
     *
     * @param int $entityId
     * @return Test\ContactUsCustom\Model\ContactUsCustomInterface
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get EntityId
     *
     * @return int
     */
    public function getEntityId()
    {
        return parent::getData(self::ENTITY_ID);
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return Test\ContactUsCustom\Model\ContactUsCustomInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return parent::getData(self::NAME);
    }

    /**
     * Set Email
     *
     * @param string $email
     * @return Test\ContactUsCustom\Model\ContactUsCustomInterface
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail()
    {
        return parent::getData(self::EMAIL);
    }

    /**
     * Set PhoneNo
     *
     * @param string $phoneNo
     * @return Test\ContactUsCustom\Model\ContactUsCustomInterface
     */
    public function setPhoneNo($phoneNo)
    {
        return $this->setData(self::PHONE_NO, $phoneNo);
    }

    /**
     * Get PhoneNo
     *
     * @return string
     */
    public function getPhoneNo()
    {
        return parent::getData(self::PHONE_NO);
    }

    /**
     * Set Query
     *
     * @param string $query
     * @return Test\ContactUsCustom\Model\ContactUsCustomInterface
     */
    public function setQuery($query)
    {
        return $this->setData(self::QUERY, $query);
    }

    /**
     * Get Query
     *
     * @return string
     */
    public function getQuery()
    {
        return parent::getData(self::QUERY);
    }

    /**
     * Set CreatedAt
     *
     * @param string $createdAt
     * @return Test\ContactUsCustom\Model\ContactUsCustomInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get CreatedAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return parent::getData(self::CREATED_AT);
    }

    /**
     * Set UpdatedAt
     *
     * @param string $updatedAt
     * @return Test\ContactUsCustom\Model\ContactUsCustomInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * Get UpdatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return parent::getData(self::UPDATED_AT);
    }


}

