<?php
 // created: 2018-04-25 10:06:14
$dictionary['RRDIS_Dispositions']['fields']['disposition_c']['labelValue']='Disposition';
$dictionary['RRDIS_Dispositions']['fields']['disposition_c']['visibility_grid']=array (
  'trigger' => 'disposition_type_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Fronter Working Leads' => 
    array (
      0 => 'Outbound Call Made',
      1 => 'Appointments',
      2 => 'FILEUPDATEOnly Updating Data in File',
      3 => 'Send an Email',
    ),
    'Closer' => 
    array (
      0 => 'NOSALENo Call Back',
      1 => 'NOSALENo Sale Call Back',
      2 => 'FILEUPDATEOnly Updating Data in File',
      3 => 'SENTVOSent to VO',
      4 => 'NOSALESale Cancelled',
      5 => 'CCBKCloser Call Back',
    ),
    'Verficiation' => 
    array (
      0 => 'VOBLOWOUTVO Blow Out with Reason',
      1 => 'VOCBKReschedule Call Back with Reason',
      2 => 'FIXERRORFixed errors on Form or Deal Data',
    ),
    'Terminal' => 
    array (
      0 => 'DNADo Not Accept',
      1 => 'DNCDo Not Call',
      2 => 'Outbound Call Failed',
      3 => 'NITNot Interested',
      4 => 'DUPEDuplicate Lead',
      5 => 'International Translator Required',
    ),
    'Admin' => 
    array (
      0 => 'Undo',
      1 => 'Close',
      2 => 'Change',
      3 => 'Back to Leads Cloud',
    ),
  ),
);

 ?>