<?php

namespace Hillpy\HikSDK\InfovisionForesight\Interfaces;

interface CameraInterface
{
    public function getCameras();
    public function getCamerasBySpatialIndex();
    public function getCamerasByRegionIndexCode();
    public function getCamera();
    public function getCameraPreviewURLs();
    public function getCameraPlaybackURLs();
}
