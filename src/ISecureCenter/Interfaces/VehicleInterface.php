<?php

namespace Hillpy\HikSDK\ISecureCenter\Interfaces;

interface VehicleInterface
{
    public function addBatchVehicle();
    public function updateSingleVehicle();
    public function deleteBatchVehicle();
    public function getAdvanceVehicleList();
    public function getVehicleListByTimeRange();
}
