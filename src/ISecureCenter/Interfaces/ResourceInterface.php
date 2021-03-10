<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface ResourceInterface
{
    public function getResourcesByParams();
    public function getSubResources();
    public function getResources();
    public function getResourcesByTimeRange();
    public function getResourceInfo();
}
