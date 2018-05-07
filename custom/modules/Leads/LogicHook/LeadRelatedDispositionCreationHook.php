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
		$disposition = BeanFactory::newBean('RRDIS_Dispositions');
		foreach($this->dispositionToLeadFieldMap as $dispoField => $leadField) {
				$disposition->{$dispoField} = $lead->{$leadField};
			}
			
			$timedate = new TimeDate();
			$datetime = $timedate->to_display_date_time($lead->date_modified);
		
			$disposition->name = 'Disposition-'.$datetime;
			$disposition->time_and_date_c = $lead->date_modified;

			$disposition->save();
			$disposition->load_relationship('leads_rrdis_dispositions_1');
			$disposition->leads_rrdis_dispositions_1->add($lead->id);
	}
	
	/**
	 * Clear Lead fields
	 * @param $lead SugarBean Lead
	 */
	private function clearFields($lead) {
		$lead->disposition_type_leads_c = '';
		$lead->disposition_c = '';
		$lead->sub_disposition_c = '';
		$lead->disposition_note_c = '';
		$lead->save();
	}
}