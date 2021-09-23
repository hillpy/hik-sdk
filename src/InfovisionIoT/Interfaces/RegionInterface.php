<?php

namespace Hillpy\HikSDK\InfovisionIoT\Interfaces;

interface ResourceInterface
{
    public function getAllTreeCode();
    public function getRegions();
    public function getRootRegions();
    public function getSubRegions();
}
