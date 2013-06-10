<?php
/**
 * @file
 * prima_contact_type_person.features.inc
 */

/**
 * Implements hook_default_crm_core_contact_type().
 */
function prima_contact_type_person_default_crm_core_contact_type() {
  $items = array();
  $items['person'] = entity_import('crm_core_contact_type', '{
    "type" : "person",
    "label" : null,
    "weight" : 0,
    "primary_fields" : { "email" : "", "address" : "", "phone" : "" },
    "name" : "Person",
    "description" : "",
    "custom" : "0",
    "disabled" : "0",
    "locked" : "0"
  }');
  return $items;
}
