<?php

namespace Hillpy\HikSDK\InfovisionIoT\Constants;

class FaceConstant extends BaseConstant
{
    const GET_PERSON_FACE_BY_ATTR_PATH = '/api/aiapplication/v2/face/queryPersonByAttrWithPage';
    const GET_PERSON_FACE_BY_ATTR_V1_PATH = '/api/aiapplication/v1/face/queryPersonByAttrWithPage';
    const GET_FACE_BY_IMAGE_MODEL_PATH = '/api/aiapplication/v2/face/queryByImageModelWithPage';
    const GET_FACE_BY_IMAGE_MODEL_V1_PATH = '/api/aiapplication/v1/face/queryByImageModelWithPage';
    const GET_FACE_DATA_BY_ATTR_PATH = '/api/aiapplication/v1/face/queryDataByAttrWithPage';
    const GET_FACE_DATA_BY_IMAGE_MODEL_PATH = '/api/aiapplication/v2/face/queryDataByImageModelWithPage';
    const GET_FACE_DATA_BY_IMAGE_MODEL_V1_PATH = '/api/aiapplication/v1/face/queryDataByImageModelWithPage';
    const SUBMIT_GET_FACE_DATA_TASK_BY_MODEL_PATH = '/api/aiapplication/v1/face/queryDataByModelWithPage';
    const GET_FACE_DATA_BY_TASK_WITH_PAGE_PATH = '/api/aiapplication/v1/face/queryDataByTaskWithPage';
    const GET_FACE_RECORD_BY_ID_PATH = '/api/aiapplication/v1/face/queryDataById';
    const SUBMIT_GET_FACE_OCCUR_FREQUENCE_TASK_PATH = '/api/aiapplication/v1/face/occurFrequence/submitTask';
    const GET_FACE_OCCUR_FREQUENCE_BY_TASK_ID_WITH_PAGE_PATH = '/api/aiapplication/v1/face/occurFrequence/queryDataByTaskIdWithPage';
    const GET_FACE_OCCUR_FREQUENCE_BY_GROUP_ID_WITH_PAGE_PATH = '/api/aiapplication/v1/face/occurFrequence/queryDataByGroupIdWithPage';
    const SUBMIT_GET_FACE_OCCUR_TOGETHER_TASK_PATH = '/api/aiapplication/v1/face/occurTogether/submitTask';
    const GET_FACE_OCCUR_TOGETHER_BY_TASK_WITH_PAGE_PATH = '/api/aiapplication/v1/face/occurTogether/queryDataByTaskWithPage';
    const GET_FACE_OCCUR_TOGETHER_BY_GROUP_ID_WITH_PAGE_PATH = '/api/aiapplication/v1/face/occurTogether/queryDataByGroupIdWithPage';
    const SUBMIT_GET_FACE_OCCUR_COLLISION_TASK_PATH = '/api/aiapplication/v1/face/occurCollision/submitTask';
    const GET_FACE_OCCUR_COLLISION_BY_TASK_WITH_PAGE_PATH = '/api/aiapplication/v1/face/occurCollision/queryDataByTaskWithPage';
    const GET_FACE_OCCUR_COLLISION_BY_GROUP_ID_WITH_PAGE_PATH = '/api/aiapplication/v1/face/occurCollision/queryDataByGroupIdWithPage';
    const SUBMIT_FACE_PERSON_LIBS_OCCUR_COLLISION_TASK_PATH = '/api/aiapplication/v1/face/personLibsOccurCollision/submitTask';
    const GET_FACE_PERSON_LIBS_OCCUR_COLLISION_BY_TASK_WITH_PAGE_PATH = '/api/aiapplication/v1/face/personLibsOccurCollision/queryDataByTaskWithPage';
    const GET_FACE_STATISTICS_TOTAL_NUM_BY_TIME_PATH = '/api/aiapplication/v2/face/statisticsTotalNumByTime';
    const GET_FACE_STATISTICS_TOTAL_NUM_BY_TIME_V1_PATH = '/api/aiapplication/v1/face/statisticsTotalNumByTime';
    const GET_PERSON_LIB_PATH = '/api/aiapplication/v2/face/faceLib/getPersonLib';
    const GET_PERSON_LIB_V1_PATH = '/api/aiapplication/v1/face/faceLib/getPersonLib';
    const ADD_PERSON_LIB_PATH = '/api/aiapplication/v1/face/faceLib/addPersonLib';
    const MODIFY_PERSON_LIB_PATH = '/api/aiapplication/v1/face/faceLib/modifyPersonLib';
    const DELETE_PERSON_LIB_PATH = '/api/aiapplication/v2/face/faceLib/deletePersonLib';
    const DELETE_PERSON_LIB_V1_PATH = '/api/aiapplication/v1/face/faceLib/deletePersonLib';
    const ADD_PERSON_PATH = '/api/aiapplication/v2/face/addPerson';
    const ADD_PERSON_V1_PATH = '/api/aiapplication/v1/face/addPerson';
    const MODIFY_PERSON_PATH = '/api/aiapplication/v2/face/modifyPerson';
    const MODIFY_PERSON_V1_PATH = '/api/aiapplication/v1/face/modifyPerson';
    const DELETE_PERSON_PATH = '/api/aiapplication/v2/face/deletePerson';
    const DELETE_PERSON_V1_PATH = '/api/aiapplication/v1/face/deletePerson';
    const MOVE_LIB_PATH = '/api/aiapplication/v2/face/faceLib/moveLib';
    const MOVE_LIB_V1_PATH = '/api/aiapplication/v1/face/faceLib/moveLib';
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
    const GET_FACE_ALARM_RECORDS_WITH_PAGE_V1_PATH = '/api/aiapplication/v1/face/queryAlarmRecordsWithPage';
    const GET_PERSON_CONTROLS_DETAILS_WITH_PAGE_PATH = '/api/aiapplication/v1/face/getPersonControlsDetailsWithPage';
}
