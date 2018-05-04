<?php
 // created: 2018-05-03 12:58:55
$dictionary['RRDIS_Dispositions']['fields']['disposition_c']['labelValue']='Disposition';
$dictionary['RRDIS_Dispositions']['fields']['disposition_c']['dependency']='';
$dictionary['RRDIS_Dispositions']['fields']['disposition_c']['visibility_grid']=array (
  'trigger' => 'disposition_type_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Fronter Working Leads' => 
    array (
      0 => 'UNRESERVE_Release Lead to be Called Again',
      1 => 'CBK',
      2 => 'CCBKCloser Call Back',
      3 => '30 Days CBK',
      4 => '60 Days CBK',
      5 => '90 Days CBK',
      6 => 'SPANISH',
      7 => 'MOVE TO HOLIDAY',
      8 => 'MOVE TO SHELL AND WYNDHAM WEEKS BUCKET',
      9 => 'MOVE TO MORTGAGE FL RESIDENTS BUCKET',
      10 => 'APSET',
      11 => 'APRSCHLD',
      12 => 'CLSRNOAP',
      13 => 'CUSTNOAP',
      14 => 'APCONFIRMED',
      15 => 'FILEUPDATEOnly Updating Data in File',
    ),
    'Closer' => 
    array (
      0 => 'UNRESERVE_Release Lead to be Called Again',
      1 => 'CCBKCloser Call Back',
      2 => 'SENTVOSent to VO',
      3 => 'NOSALE_No Sale _with Reason_',
      4 => 'NOSALE_Sale Cancelled',
      5 => 'NOSALECB_No Sale Call Back',
      6 => 'FILEUPDATEOnly Updating Data in File',
    ),
    'Verficiation' => 
    array (
      0 => 'VOCBKReschedule Call Back with Reason',
      1 => 'VONURT_VO Nurture',
      2 => 'VOBLOWOUTVO Blow Out with Reason',
      3 => 'FIXERRORFixed errors on Form or Deal Data',
    ),
    'Terminal' => 
    array (
      0 => 'NOTENOUGH_Not Enough Pain',
      1 => 'ALLBUSY_All Circuits are Busy',
      2 => 'NOTWKNUMB_Not Working Number',
      3 => 'WRONG_Wrong Number',
      4 => 'DUPEDuplicate Lead',
      5 => 'DNCDo Not Call',
      6 => 'DNADo Not Accept',
      7 => 'NIT_Not Interested',
      8 => 'OWS_ONLY wants to sell',
      9 => 'AWC_Already working with another company',
      10 => 'GOTRID_Already got rid of timeshare',
      11 => 'Cant Get Current with Maint Fees',
    ),
    'Admin' => 
    array (
      0 => 'Undo',
      1 => 'Close',
      2 => 'Change',
      3 => 'Back to Leads Cloud',
    ),
    'Back to Leads Cloud' => 
    array (
      0 => 'EMAIL_Sent Email',
      1 => 'LMS_Left Message',
      2 => 'NAS_No Answer',
      3 => 'MBF_Mail Box Full',
      4 => 'ASM_Answer Machine',
      5 => 'OTH_Other',
    ),
    'Update' => 
    array (
    ),
  ),
);

 ?>