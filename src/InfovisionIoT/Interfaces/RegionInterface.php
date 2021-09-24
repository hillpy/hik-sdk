<?php

namespace Hillpy\HikSDK\InfovisionIoT\Interfaces;

interface RegionInterface
{
    public function getAllTreeCode();
    public function getRegions();
    public function getRootRegions();
    public function getSubRegions();
}
