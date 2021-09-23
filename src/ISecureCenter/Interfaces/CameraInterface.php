<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface CameraInterface
{
    public function searchCamera();
    public function getCameras();
    public function getCamerasByRegionIndexCode();
    public function getCamera();
    public function getCameraByTimeRange();
    public function getCameraPreviewURLs();
    public function getCameraPlaybackURLs();
}
