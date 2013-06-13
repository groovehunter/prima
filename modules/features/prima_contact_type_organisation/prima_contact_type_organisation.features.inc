<?php
/**
 * @file
 * prima_contact_type_organisation.features.inc
 */

/**
 * Implements hook_default_crm_core_contact_type().
 */
function prima_contact_type_organisation_default_crm_core_contact_type() {
  $items = array();
  $items['organisation'] = entity_import('crm_core_contact_type', '{
    "type" : "organisation",
    "label" : null,
    "weight" : 0,
    "primary_fields" : null,
    "name" : "Organisation",
    "description" : "",
    "custom" : "0",
    "disabled" : "0",
    "locked" : "0"
  }');
  return $items;
}
