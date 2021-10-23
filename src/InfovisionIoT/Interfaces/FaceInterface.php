<?php

namespace Hillpy\HikSDK\InfovisionIoT\Interfaces;

interface FaceInterface
{
    public function getPersonFaceByAttr();
    public function getFaceByImageModel();
    public function getFaceDataByAttr();
    public function getFaceDataByImageModel();
    public function getFaceRecordById();
    public function getFaceStatisticsTotalNumByTime();
    public function getPersonLib();
    public function addPersonLib();
    public function modifyPersonLib();
    public function deletePersonLib();
    public function addPerson();
    public function modifyPerson();
    public function deletePerson();
    public function moveLib();
    public function addSinglePictureControl();
    public function modifySinglePictureControl();
    public function addPersonLibControl();
    public function modifyPersonLibControl();
    public function getPersonControlWithPage();
    public function addSinglePictureRegionControl();
    public function modifySinglePictureRegionControl();
    public function addPersonLibRegionControl();
    public function modifyPersonLibRegionControl();
    public function getFaceAlarmRecordsWithPage();
    public function getPersonControlsDetailsWithPage();
}
