<?php

namespace Test\ContactUsCustom\Model\ResourceModel\ContactUsCustom;

/**
 * Collection Class
 */
class Collection extends \Test\ContactUsCustom\Model\ResourceModel\AbstractCollection
{

    protected $_idFieldName = 'entity_id';

    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init(
            \Test\ContactUsCustom\Model\ContactUsCustom::class,
            \Test\ContactUsCustom\Model\ResourceModel\ContactUsCustom::class
        );
        $this->_map['fields']['entity_id'] = 'main_table.entity_id';
    }

}
