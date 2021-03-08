<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface OrgInterface
{
    public function updateSingleOrg();
    public function deleteBatchOrg();
    public function addBatchOrg();
    public function getRootOrg();
    public function getOrgList();
    public function getAdvanceOrgList();
    public function getSubOrgListByParentOrgIndexCode();
    public function getOrgByTimeRange();
    public function getOrgInfoByOrgIndexCodes();
}
