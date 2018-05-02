<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class LeadRelatedDispositionCreationHook {
	protected static $saved = array();
	private $dispositionToLeadFieldMap =[
		'disposition_type_c' => 'disposition_type_c',
		'disposition_c' => 'disposition_c',
		'sub_disposition_c' => 'sub_disposition_c',
		'disposition_note_c' => 'disposition_note_c',
	];
	
	/**
	 * Main logic method
	 * @param $bean Lead
	 * @param $event string
	 * @param $arguments array
	 */
	public function main($bean, $event, $arguments) {
		if (!empty($bean->disposition_type_c)) {
			if (!isset(self::$saved[$bean->id])){
				$this->createRelatedDisposition($bean);
				$this->clearFields($bean);
			}
		} else {
			return false;
		}
	}
	
	/**
	 * Create new related Disposition record
	 * @param $lead SugarBean Lead
	 */
	private function createRelatedDisposition($lead) {
		$disposition = BeanFactory::newBean('RRDIS_Dispositions');
		foreach($this->dispositionToLeadFieldMap as $dispoField => $leadField) {
			$disposition->{$dispoField} = $lead->{$leadField};
		}
		
		$timedate = new TimeDate();
		$datetime = $timedate->to_display_date_time($lead->date_modified);
		
		$disposition->name = 'Disposition-'.$datetime;
		$disposition->time_and_date_c = $lead->date_modified;
		$disposition->leads_rrdis_dispositions_1_name = $lead->name;
		$disposition->leads_rrdis_dispositions_1leads_ida = $lead->id;
		$disposition->save();	
	}
	
	/**
	 * Clear Disposition fields directly form database
	 * @param $lead SugarBean Lead
	 */
	private function clearFields($lead) {
		$lead->disposition_type_c = '';
		self::$saved[$lead->id] = true; 
		$lead->save();
	}
}