<?php
return array(
   'SMS_ON'=>false,
   'SMS_MOBILE'=>'',//填写你的手机号

   'SPARE_DB_HOST'=>'',//填写备用数据库地址
   'SPARE_DB_NAME'=>'',//填写备用数据库名
   'SPARE_DB_USER'=>'',//填写备用数据库用户名
   'SPARE_DB_PWD'=>'',//填写备用数据库密码
   'SPARE_DB_PORT'=>'',//填写备用数据库端口
   'SPARE_DB_DEBUG'=>false,//是否开启备用数据库调试

   'TMPL_PARSE_STRING'=>array(
   '/Public/upload'=>sae_storage_root('Public').'/upload'
    )
);