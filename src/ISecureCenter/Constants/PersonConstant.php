<?php

namespace Hillpy\HikSDK\ISecureCenter\Constants;

class PersonConstant extends BaseConstant
{
    const ADD_SINGLE_PERSON_PATH = '/api/resource/v1/person/single/add';
    const ADD_BATCH_PERSON_PATH = '/api/resource/v1/person/batch/add';
    const UPDATE_SINGLE_PERSON_PATH = '/api/resource/v1/person/single/update';
    const DELETE_BATCH_PERSON_PATH = '/api/resource/v1/person/batch/delete';
    const GET_ORGINDEXCODE_PERSON_LIST_PATH = '/api/resource/v2/person/orgIndexCode/personList';
    const GET_PERSON_LIST_PATH = '/api/resource/v2/person/personList';
    const GET_ADVANCE_PERSON_LIST_PATH = '/api/resource/v2/person/advance/personList';
    const GET_PERSON_INFO_BY_CERTIFICATE_NO_PATH = '/api/resource/v1/person/certificateNo/personInfo';
    const GET_PERSON_INFO_BY_PERSON_ID_PATH = '/api/resource/v1/person/personId/personInfo';
    const GET_PERSON_INFO_BY_PHONE_NO_PATH = '/api/resource/v1/person/phoneNo/personInfo';
    const GET_PERSON_PICTURE_PATH = '/api/resource/v1/person/picture';
}
