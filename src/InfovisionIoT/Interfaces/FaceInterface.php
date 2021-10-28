<?php

namespace Hillpy\HikSDK\InfovisionIoT\Interfaces;

interface FaceInterface
{
    public function getPersonFaceByAttr();
    public function getPersonFaceByAttrV1();
    public function getFaceByImageModel();
    public function getFaceByImageModelV1();
    public function getFaceDataByAttr();
    public function getFaceDataByImageModel();
    public function getFaceDataByImageModelV1();
    public function submitGetFaceDataTaskByModel();
    public function getFaceFataByTaskWithPage();
    public function getFaceRecordById();
    public function submitGetFaceOccurFrequenceTask();
    public function getFaceOccurFrequenceByTaskIdWithPage();
    public function getFaceOccurFrequenceByGroupIdWithPage();
    public function submitGetFaceOccurTogetherTask();
    public function getFaceOccurTogetherByTaskWithPage();
    public function getFaceOccurTogetherByGroupIdWithPage();
    public function submitGetFaceOccurCollisionTask();
    public function getFaceOccurCollisionByTaskWithPage();
    public function getFaceOccurCollisionByGroupIdWithPage();
    public function submitFacePersonLibsOccurCollisionTask();
    public function getFacePersonLibsOccurCollisionByTaskWithPage();
    public function getFaceStatisticsTotalNumByTime();
    public function getFaceStatisticsTotalNumByTimeV1();
    public function getPersonLib();
    public function getPersonLibV1();
    public function addPersonLib();
    public function modifyPersonLib();
    public function deletePersonLib();
    public function deletePersonLibV1();
    public function addPerson();
    public function addPersonV1();
    public function modifyPerson();
    public function modifyPersonV1();
    public function deletePerson();
    public function deletePersonV1();
    public function moveLib();
    public function moveLibV1();
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
    public function getFaceAlarmRecordsWithPageV1();
    public function getPersonControlsDetailsWithPage();
}
