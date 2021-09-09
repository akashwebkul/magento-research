<?php

namespace Test\ContactUsCustom\Api\Data;

/**
 * ContactUsCustom Interface
 */
interface ContactUsCustomInterface
{

    const ENTITY_ID = 'entity_id';

    const NAME = 'name';

    const EMAIL = 'email';

    const PHONE_NO = 'phone_no';

    const QUERY = 'query';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    /**
     * Set EntityId
     *
     * @param int $entityId
     * @return Test\ContactUsCustom\Api\Data\ContactUsCustomInterface
     */
    public function setEntityId($entityId);
    /**
     * Get EntityId
     *
     * @return int
     */
    public function getEntityId();
    /**
     * Set Name
     *
     * @param string $name
     * @return Test\ContactUsCustom\Api\Data\ContactUsCustomInterface
     */
    public function setName($name);
    /**
     * Get Name
     *
     * @return string
     */
    public function getName();
    /**
     * Set Email
     *
     * @param string $email
     * @return Test\ContactUsCustom\Api\Data\ContactUsCustomInterface
     */
    public function setEmail($email);
    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail();
    /**
     * Set PhoneNo
     *
     * @param string $phoneNo
     * @return Test\ContactUsCustom\Api\Data\ContactUsCustomInterface
     */
    public function setPhoneNo($phoneNo);
    /**
     * Get PhoneNo
     *
     * @return string
     */
    public function getPhoneNo();
    /**
     * Set Query
     *
     * @param string $query
     * @return Test\ContactUsCustom\Api\Data\ContactUsCustomInterface
     */
    public function setQuery($query);
    /**
     * Get Query
     *
     * @return string
     */
    public function getQuery();
    /**
     * Set CreatedAt
     *
     * @param string $createdAt
     * @return Test\ContactUsCustom\Api\Data\ContactUsCustomInterface
     */
    public function setCreatedAt($createdAt);
    /**
     * Get CreatedAt
     *
     * @return string
     */
    public function getCreatedAt();
    /**
     * Set UpdatedAt
     *
     * @param string $updatedAt
     * @return Test\ContactUsCustom\Api\Data\ContactUsCustomInterface
     */
    public function setUpdatedAt($updatedAt);
    /**
     * Get UpdatedAt
     *
     * @return string
     */
    public function getUpdatedAt();

}

