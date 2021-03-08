<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface PersonInterface
{
    public function addSinglePerson();
    public function addBatchPerson();
    public function updateSinglePerson();
    public function deleteBatchPerson();
    public function getOrgIndexCodePersonList();
    public function getPersonList();
    public function getAdvancePersonList();
    public function getPersonInfoByCondition();
    public function getPersonPicture();
    public function getPersonListByTimeRange();
}
