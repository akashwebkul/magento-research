<?php

namespace Test\ContactUsCustom\Model\ResourceModel\ContactUsCustom\Grid;

use Magento\Framework\Search\AggregationInterface;
use Magento\Framework\Api\Search\SearchResultInterface;
use Test\ContactUsCustom\Model\ResourceModel\ContactUsCustom\Collection as ContactUsCollection;

/**
 * Class Collection
 * Collection for displaying grid of mobikul notification
 */
class Collection extends ContactUsCollection implements SearchResultInterface
{
    /**
     * @var ObjectManagerInterface
     */
    protected $_objectManager;
    /**
     * @var AggregationInterface
     */
    protected $_aggregations;

    /**
     * Undocumented function
     *
     * @param [type] $mainTable
     * @param [type] $eventPrefix
     * @param [type] $eventObject
     * @param [type] $resourceModel
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory
     * @param \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy
     * @param [type] $model
     * @param \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource
     * @param [type] $connection
     */
    public function __construct(
        $mainTable,
        $eventPrefix,
        $eventObject,
        $resourceModel,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory,
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy,
        $model = \Magento\Framework\View\Element\UiComponent\DataProvider\Document::class,
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null,
        \Magento\Framework\DB\Adapter\AdapterInterface $connection = null
    ) {
        $this->_objectManager = $objectManager;
        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $storeManager,
            $connection,
            $resource
        );
        $this->_eventPrefix = $eventPrefix;
        $this->_eventObject = $eventObject;
        $this->_init($model, $resourceModel);
        $this->setMainTable($mainTable);
    }
    /**
     * @param AggregationInterface $aggregations
     * @return $this
     */
    public function setAggregations($aggregations)
    {
        $this->_aggregations = $aggregations;
    }
    /**
     * @return AggregationInterface
     */
    public function getAggregations()
    {
        return $this->_aggregations;
    }
    /**
     * Set search criteria.
     *
     * @param  \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return $this
     */
    public function setSearchCriteria(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null
    ) {
        return $this;
    }
    /**
     * Set total count.
     *
     * @param  int $totalCount
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        return $this;
    }
    /**
     * Get search criteria.
     *
     * @return \Magento\Framework\Api\SearchCriteriaInterface|null
     */
    public function getSearchCriteria()
    {
        return null;
    }
    /**
     * Set items list.
     *
     * @param  \Magento\Framework\Api\ExtensibleDataInterface[] $items
     * @return $this
     */
    public function setItems(array $items = null)
    {
        return $this;
    }
    /**
     * Get total count.
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->getSize();
    }
    /**
     * Filter the Contact us
     *
     * @return void
     */
    protected function _initSelect()
    {
        parent::_initSelect();
    }
    /**
     * render filter
     *
     * @return renderParentFiler
     */
    protected function _renderFiltersBefore()
    {
        parent::_renderFiltersBefore();
    }
}
