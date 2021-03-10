<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface RegionInterface
{
    public function getRootRegions();
    public function getRegionsByParams();
    public function getSubRegions();
    public function getRegions();
    public function getRegionInfo();
    public function getRegionByTimeRange();
    public function addBatchRegion();
    public function updateSingleRegion();
}
