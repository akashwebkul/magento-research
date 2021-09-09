<?php

namespace Test\ContactUsCustom\Helper;

use Magento\Customer\Model\Session as CustomerSession;

/**
 * helper class.
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * Customer session.
     *
     * @var CustomerSession
     */
    protected $_customerSession;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;

    /**
     * Undocumented function
     *
     * @param CustomerSession $customerSession
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Test\ContactUsCustom\Api\Data\ContactUsCustomInterfaceFactory $contactUs
     * @param \Test\ContactUsCustom\Api\ContactUsCustomRepositoryInterface $contactUsRepo
     * @param \Magento\Framework\Stdlib\DateTime\DateTime $date
     */
    public function __construct(
        CustomerSession $customerSession,
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Test\ContactUsCustom\Api\Data\ContactUsCustomInterfaceFactory $contactUs,
        \Test\ContactUsCustom\Api\ContactUsCustomRepositoryInterface $contactUsRepo,
        \Magento\Framework\Stdlib\DateTime\DateTime $date
    ) {
        $this->_customerSession = $customerSession;
        $this->_storeManager = $storeManager;
        $this->contactUs = $contactUs;
        $this->contactUsRepo = $contactUsRepo;
        $this->date = $date;
        parent::__construct($context);
    }
    /**
     * get contact list repo
     *
     * @return contactCollection
     */
    public function getCustomContatUs()
    {
        return $this->contactUs->create();
    }
    /**
     * save the contact us data
     *
     * @param \Test\ContactUsCustom\Api\Data\ContactUsCustomInterface $contactUsObj
     * @return void
     */
    public function saveCustomContactData(
        \Test\ContactUsCustom\Api\Data\ContactUsCustomInterface $contactUsObj
    ) {
        $this->contactUsRepo->save($contactUsObj);
    }
    /**
     * get current date time 
     *
     * @return dateTimeObj
     */
    public function currentDateTime()
    {
        return $this->date->gmtDate();
    }
}
