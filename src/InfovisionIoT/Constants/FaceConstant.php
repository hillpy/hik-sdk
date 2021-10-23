<?php

namespace Hillpy\HikSDK\InfovisionIoT\Constants;

class FaceConstant extends BaseConstant
{
    const GET_PERSON_FACE_BY_ATTR_PATH = '/api/aiapplication/v2/face/queryPersonByAttrWithPage';
    const GET_FACE_BY_IMAGE_MODEL_PATH = '/api/aiapplication/v2/face/queryByImageModelWithPage';
    const GET_FACE_DATA_BY_ATTR_PATH = '/api/aiapplication/v1/face/queryDataByAttrWithPage';
    const GET_FACE_DATA_BY_IMAGE_MODEL_PATH = '/api/aiapplication/v2/face/queryDataByImageModelWithPage';
    const GET_FACE_RECORD_BY_ID_PATH = '/api/aiapplication/v1/face/queryDataById';
    const GET_FACE_STATISTICS_TOTAL_NUM_BY_TIME_PATH = '/api/aiapplication/v2/face/statisticsTotalNumByTime';
    const GET_PERSON_LIB_PATH = '/api/aiapplication/v2/face/faceLib/getPersonLib';
    const ADD_PERSON_LIB_PATH = '/api/aiapplication/v1/face/faceLib/addPersonLib';
    const MODIFY_PERSON_LIB_PATH = '/api/aiapplication/v1/face/faceLib/modifyPersonLib';
    const DELETE_PERSON_LIB_PATH = '/api/aiapplication/v2/face/faceLib/deletePersonLib';
    const ADD_PERSON_PATH = '/api/aiapplication/v2/face/addPerson';
    const MODIFY_PERSON_PATH = '/api/aiapplication/v2/face/modifyPerson';
    const DELETE_PERSON_PATH = '/api/aiapplication/v2/face/deletePerson';
    const MOVE_LIB_PATH = '/api/aiapplication/v2/face/faceLib/moveLib';
    const ADD_SINGLE_PICTURE_CONTROL_PATH = '/api/aiapplication/v1/face/addSinglePictureControl';
    const MODIFY_SINGLE_PICTURE_CONTROL_PATH = '/api/aiapplication/v1/face/modifySinglePictureControl';
    const ADD_PERSON_LIB_CONTROL_PATH = '/api/aiapplication/v1/face/addPersonLibControl';
    const MODIFY_PERSON_LIB_CONTROL_PATH = '/api/aiapplication/v1/face/modifyPersonLibControl';
    const GET_PERSON_CONTROL_WITH_PAGE_PATH = '/api/aiapplication/v1/face/getPersonControlsWithPage';
    const ADD_SINGLE_PICTURE_REGION_CONTROL_PATH = '/api/aiapplication/v3/face/addSinglePictureRegionControl';
    const MODIFY_SINGLE_PICTURE_REGION_CONTROL_PATH = '/api/aiapplication/v3/face/modifySinglePictureRegionControl';
    const ADD_PERSON_LIB_REGION_CONTROL_PATH = '/api/aiapplication/v3/face/addPersonLibRegionControl';
    const MODIFY_PERSON_LIB_REGION_CONTROL_PATH = '/api/aiapplication/v3/face/modifyPersonLibRegionControl';
    const GET_FACE_ALARM_RECORDS_WITH_PAGE_PATH = '/api/aiapplication/v3/face/queryFaceAlarmRecordsWithPage';
    const GET_PERSON_CONTROLS_DETAILS_WITH_PAGE_PATH = '/api/aiapplication/v1/face/getPersonControlsDetailsWithPage';
}
