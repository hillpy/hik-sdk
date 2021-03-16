<?php

namespace Hillpy\HikSDK\InfovisionIoT\Interfaces;

interface ResourceInterface
{
    public function getAllTreeCode();
    public function getRegions();
    public function getRootRegions();
    public function getSubRegions();
    public function getCameras();
    public function getCamerasBySpatialIndex();
    public function getCamerasByRegionIndexCode();
    public function getCamera();
    public function modifyCamera();
    public function getCamerasByRegionIndexCodes();
}
