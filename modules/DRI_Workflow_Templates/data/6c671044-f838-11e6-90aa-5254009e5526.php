<?php

return array (
  'id' => '6c671044-f838-11e6-90aa-5254009e5526',
  'name' => 'Lead Journey A',
  'description' => '',
  'team_id' => '1',
  'team_set_id' => '1',
  'acl_team_set_id' => '',
  'acl_team_names' => '',
  'available_modules' => '^Leads^',
  'dri_subworkflow_templates' => 
  array (
    'bb3c1f84-f838-11e6-b5aa-5254009e5526' => 
    array (
      'id' => 'bb3c1f84-f838-11e6-b5aa-5254009e5526',
      'name' => 'Lead Qualification',
      'description' => '',
      'team_id' => '1',
      'team_set_id' => '1',
      'acl_team_set_id' => '',
      'acl_team_names' => '',
      'label' => '01. Lead Qualification',
      'sort_order' => '1',
      'points' => '60',
      'related_activities' => '6',
      'dri_workflow_task_templates' => 
      array (
        '274a6b36-f839-11e6-9f50-5254009e5526' => 
        array (
          'id' => '274a6b36-f839-11e6-9f50-5254009e5526',
          'name' => 'Gather Customer requirements and needs',
          'description' => '',
          'team_id' => '1',
          'team_set_id' => '1',
          'acl_team_set_id' => '',
          'acl_team_names' => '',
          'task_due_date_type' => 'days_from_previous_activity_completed',
          'priority' => 'Medium',
          'type' => 'customer_task',
          'activity_type' => 'Tasks',
          'duration_minutes' => '0',
          'direction' => 'Outbound',
          'points' => '10',
          'time_of_day' => '12:00',
          'task_due_days' => '1',
          'sort_order' => '2',
          'duration_hours' => '1',
          'duration' => '',
          'dri_subworkflow_template_id' => 'bb3c1f84-f838-11e6-b5aa-5254009e5526',
          'dri_subworkflow_template_name' => 'Lead Qualification',
          'dri_workflow_template_id' => '6c671044-f838-11e6-90aa-5254009e5526',
          'dri_workflow_template_name' => 'Lead Journey A',
        ),
        '394b1c90-f839-11e6-9406-5254009e5526' => 
        array (
          'id' => '394b1c90-f839-11e6-9406-5254009e5526',
          'name' => 'Confirm we can meet customer needs',
          'description' => '',
          'team_id' => '1',
          'team_set_id' => '1',
          'acl_team_set_id' => '',
          'acl_team_names' => '',
          'task_due_date_type' => 'days_from_previous_activity_completed',
          'priority' => 'High',
          'type' => 'internal_task',
          'activity_type' => 'Tasks',
          'duration_minutes' => '0',
          'direction' => 'Outbound',
          'points' => '10',
          'time_of_day' => '12:00',
          'task_due_days' => '1',
          'sort_order' => '3',
          'duration_hours' => '1',
          'duration' => '',
          'dri_subworkflow_template_id' => 'bb3c1f84-f838-11e6-b5aa-5254009e5526',
          'dri_subworkflow_template_name' => 'Lead Qualification',
          'dri_workflow_template_id' => '6c671044-f838-11e6-90aa-5254009e5526',
          'dri_workflow_template_name' => 'Lead Journey A',
        ),
        '6c9f38f6-f839-11e6-8ea1-5254009e5526' => 
        array (
          'id' => '6c9f38f6-f839-11e6-8ea1-5254009e5526',
          'name' => 'Book meeting / web presentation of solution',
          'description' => '',
          'team_id' => '1',
          'team_set_id' => '1',
          'acl_team_set_id' => '',
          'acl_team_names' => '',
          'task_due_date_type' => 'days_from_previous_activity_completed',
          'priority' => 'High',
          'type' => 'internal_task',
          'activity_type' => 'Tasks',
          'duration_minutes' => '0',
          'direction' => 'Outbound',
          'points' => '10',
          'time_of_day' => '12:00',
          'task_due_days' => '1',
          'sort_order' => '4',
          'duration_hours' => '1',
          'duration' => '',
          'dri_subworkflow_template_id' => 'bb3c1f84-f838-11e6-b5aa-5254009e5526',
          'dri_subworkflow_template_name' => 'Lead Qualification',
          'dri_workflow_template_id' => '6c671044-f838-11e6-90aa-5254009e5526',
          'dri_workflow_template_name' => 'Lead Journey A',
          'blocked_by' => json_encode(array ('394b1c90-f839-11e6-9406-5254009e5526')),
        ),
        '89923f9e-f839-11e6-9357-5254009e5526' => 
        array (
          'id' => '89923f9e-f839-11e6-9357-5254009e5526',
          'name' => 'Define opportunity type',
          'description' => '',
          'team_id' => '1',
          'team_set_id' => '1',
          'acl_team_set_id' => '',
          'acl_team_names' => '',
          'task_due_date_type' => 'days_from_previous_activity_completed',
          'priority' => 'Medium',
          'type' => 'internal_task',
          'activity_type' => 'Tasks',
          'duration_minutes' => '0',
          'direction' => 'Outbound',
          'points' => '10',
          'time_of_day' => '12:00',
          'task_due_days' => '1',
          'sort_order' => '5',
          'duration_hours' => '1',
          'duration' => '',
          'dri_subworkflow_template_id' => 'bb3c1f84-f838-11e6-b5aa-5254009e5526',
          'dri_subworkflow_template_name' => 'Lead Qualification',
          'dri_workflow_template_id' => '6c671044-f838-11e6-90aa-5254009e5526',
          'dri_workflow_template_name' => 'Lead Journey A',
        ),
        'b37a1a5c-f839-11e6-9d80-5254009e5526' => 
        array (
          'id' => 'b37a1a5c-f839-11e6-9d80-5254009e5526',
          'name' => 'We have a opportunity',
          'description' => 'Convert the lead and select the right opportunity journey according to product / service ',
          'team_id' => '1',
          'team_set_id' => '1',
          'acl_team_set_id' => '',
          'acl_team_names' => '',
          'task_due_date_type' => 'days_from_previous_activity_completed',
          'priority' => 'High',
          'type' => 'milestone',
          'activity_type' => 'Tasks',
          'duration_minutes' => '0',
          'direction' => 'Outbound',
          'points' => '10',
          'time_of_day' => '12:00',
          'task_due_days' => '1',
          'sort_order' => '6',
          'duration_hours' => '1',
          'duration' => '',
          'dri_subworkflow_template_id' => 'bb3c1f84-f838-11e6-b5aa-5254009e5526',
          'dri_subworkflow_template_name' => 'Lead Qualification',
          'dri_workflow_template_id' => '6c671044-f838-11e6-90aa-5254009e5526',
          'dri_workflow_template_name' => 'Lead Journey A',
        ),
        'e9a279c2-f838-11e6-91b7-5254009e5526' => 
        array (
          'id' => 'e9a279c2-f838-11e6-91b7-5254009e5526',
          'name' => 'Call Lead',
          'description' => '',
          'team_id' => '1',
          'team_set_id' => '1',
          'acl_team_set_id' => '',
          'acl_team_names' => '',
          'task_due_date_type' => 'days_from_stage_started',
          'priority' => 'Medium',
          'type' => 'internal_task',
          'activity_type' => 'Tasks',
          'duration_minutes' => '0',
          'direction' => 'Outbound',
          'points' => '10',
          'time_of_day' => '12:00',
          'task_due_days' => '1',
          'sort_order' => '1',
          'duration_hours' => '1',
          'duration' => '',
          'dri_subworkflow_template_id' => 'bb3c1f84-f838-11e6-b5aa-5254009e5526',
          'dri_subworkflow_template_name' => 'Lead Qualification',
          'dri_workflow_template_id' => '6c671044-f838-11e6-90aa-5254009e5526',
          'dri_workflow_template_name' => 'Lead Journey A',
        ),
      ),
      'dri_workflow_template_id' => '6c671044-f838-11e6-90aa-5254009e5526',
      'dri_workflow_template_name' => 'Lead Journey A',
    ),
  ),
  'points' => '60',
  'related_activities' => '6',
  'assignee_rule' => 'stage_start',
  'target_assignee' => 'parent_assignee',
);
