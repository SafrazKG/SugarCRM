<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class LeadRelatedDispositionCreationHook {
	private $dispositionToLeadFieldMap =[
		'disposition_type_c' => 'disposition_type_leads_c',
		'disposition_c' => 'disposition_c',
		'sub_disposition_c' => 'sub_disposition_c',
		'disposition_note_c' => 'disposition_note_c',
	];
	
	/**
	 * Create Dispostion and clear fields afterwards
	 * @param $bean Lead
	 * @param $event string
	 * @param $arguments array
	 */
	public function createDispositionAndClearFields($bean, $event, $arguments) {
		if (!empty($bean->disposition_type_leads_c)) {
			$this->createRelatedDisposition($bean);
			$this->clearFields($bean);
		}
	}
	
	/**
	 * Create new related Disposition record
	 * @param $lead SugarBean Lead
	 */
	private function createRelatedDisposition($lead) {
		if ($lead->saved != true) {
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
	}
	
	/**
	 * Clear Disposition fields directly form database
	 * @param $lead SugarBean Lead
	 */
	private function clearFields($lead) {
		$lead->disposition_type_leads_c = '';
		$lead->saved = true;
		$lead->save();
	}
}