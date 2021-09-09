<?php

namespace Test\ContactUsCustom\Api;

/**
 * ContactUsCustomRepository Interface
 */
interface ContactUsCustomRepositoryInterface
{

    /**
     * get by id
     *
     * @param int $id
     * @return \Test\ContactUsCustom\Model\ContactUsCustom
     */
    public function getById($id);
    /**
     * get by id
     *
     * @param int $id
     * @return \Test\ContactUsCustom\Model\ContactUsCustom
     */
    public function save(\Test\ContactUsCustom\Model\ContactUsCustom $subject);
    /**
     * get list
     * @return \Test\ContactUsCustom\Model\ContactUsCustom
     */
    public function getList();
    /**
     * delete
     *
     * @param \Test\ContactUsCustom\Model\ContactUsCustom $subject
     * @return boolean
     */
    public function delete(\Test\ContactUsCustom\Model\ContactUsCustom $subject);
    /**
     * delete by id
     *
     * @param int $id
     * @return boolean
     */
    public function deleteById($id);

}

