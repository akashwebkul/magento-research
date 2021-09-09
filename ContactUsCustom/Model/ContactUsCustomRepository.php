<?php

namespace Test\ContactUsCustom\Model;

/**
 * ContactUsCustomRepository Class
 */
class ContactUsCustomRepository implements \Test\ContactUsCustom\Api\ContactUsCustomRepositoryInterface
{

    protected $modelFactory = null;

    protected $collectionFactory = null;

    /**
     * initialize
     *
     * @param \Test\ContactUsCustom\Model\ContactUsCustomFactory $modelFactory
     * @param
     * \Test\ContactUsCustom\Model\ResourceModel\ContactUsCustom\CollectionFactory
     * $collectionFactory
     * @return void
     */
    public function __construct(\
        Test\ContactUsCustom\Model\ContactUsCustomFactory $modelFactory,
        \Test\ContactUsCustom\Model\ResourceModel\ContactUsCustom\CollectionFactory $collectionFactory
    ) {
        $this->modelFactory = $modelFactory;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * get by id
     *
     * @param int $id
     * @return \Test\ContactUsCustom\Model\ContactUsCustom
     */
    public function getById($id)
    {
        $model = $this->modelFactory->create()->load($id);
        if (!$model->getId()) {
            throw new \Magento\Framework\Exception\NoSuchEntityException(__('The CMS block with the "%1" ID doesn\'t exist.', $id));
        }
        return $model;
    }

    /**
     * get by id
     *
     * @param int $id
     * @return \Test\ContactUsCustom\Model\ContactUsCustom
     */
    public function save(\Test\ContactUsCustom\Model\ContactUsCustom $subject)
    {
        try {
            $subject->save();
        } catch (\Exception $exception) {
            throw new \Magento\Framework\Exception\CouldNotSaveException(__($exception->getMessage()));
        }
        return $subject;
    }

    /**
     * get list
     * @return \Test\ContactUsCustom\Model\ContactUsCustom
     */
    public function getList()
    {
        $collection = $this->collectionFactory->create();
        return $collection;
    }

    /**
     * delete
     *
     * @param \Test\ContactUsCustom\Model\ContactUsCustom $subject
     * @return boolean
     */
    public function delete(\Test\ContactUsCustom\Model\ContactUsCustom $subject)
    {
        try {
            $subject->delete();
        } catch (\Exception $exception) {
            throw new \Magento\Framework\Exception\CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * delete by id
     *
     * @param int $id
     * @return boolean
     */
    public function deleteById($id)
    {
        return $this->delete($this->getById($id));
    }

}
