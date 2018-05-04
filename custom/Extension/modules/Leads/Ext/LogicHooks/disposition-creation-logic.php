<?php
$hook_array['after_save'][] = array(
	1,
	'Create Disposition related record and clear linked fields',
	'custom/modules/Leads/LogicHook/LeadRelatedDispositionCreationHook.php',
	'LeadRelatedDispositionCreationHook',
	'createDispositionAndClearFields'
);