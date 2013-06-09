<?php
/**
 * @file
 * prima_crm_contact_types.features.inc
 */

/**
 * Implements hook_default_crm_core_contact_type().
 */
function prima_crm_contact_types_default_crm_core_contact_type() {
  $items = array();
  $items['household'] = entity_import('crm_core_contact_type', '{
    "type" : "household",
    "label" : null,
    "weight" : 0,
    "primary_fields" : { "email" : "", "address" : "", "phone" : "" },
    "name" : "Familie",
    "description" : "Familien komplett gesehen",
    "custom" : "0",
    "disabled" : "0",
    "locked" : "1",
    "rdf_mapping" : []
  }');
  $items['individual'] = entity_import('crm_core_contact_type', '{
    "type" : "individual",
    "label" : null,
    "weight" : 0,
    "primary_fields" : {
      "email" : "field_email",
      "address" : "field_anschrift",
      "phone" : "field_telefon"
    },
    "name" : "Person",
    "description" : "Eine Einzelperson",
    "custom" : "0",
    "disabled" : "0",
    "locked" : "1",
    "rdf_mapping" : []
  }');
  $items['organization'] = entity_import('crm_core_contact_type', '{
    "type" : "organization",
    "label" : null,
    "weight" : 0,
    "primary_fields" : {
      "email" : "field_email",
      "address" : "field_anschrift",
      "phone" : "field_telefon"
    },
    "name" : "Organisation",
    "description" : "Firmen, Organisationen, Vereine etc.",
    "custom" : "0",
    "disabled" : "0",
    "locked" : "1",
    "rdf_mapping" : []
  }');
  return $items;
}
