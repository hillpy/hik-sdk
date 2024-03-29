<?php

namespace Hillpy\HikSDK\InfovisionIoT\Interfaces;

interface CameraInterface
{
    public function getCameras();
    public function getCamerasBySpatialIndex();
    public function getCamerasByRegionIndexCode();
    public function getCamera();
    public function modifyCamera();
    public function getCamerasByRegionIndexCodes();
    public function getCameraPreviewURLs();
    public function getCameraPlaybackURLs();
}
