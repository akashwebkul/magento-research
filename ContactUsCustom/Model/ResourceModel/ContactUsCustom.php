<?php

namespace Test\ContactUsCustom\Model\ResourceModel;

/**
 * ContactUsCustom Class
 */
class ContactUsCustom extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init("contact_us_constom", "entity_id");
    }


}

