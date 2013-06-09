<?php
/**
 * @file
 * prima_content.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function prima_content_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'contact_name'
  $field_bases['contact_name'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(
      0 => 'crm_core_contact',
    ),
    'field_name' => 'contact_name',
    'foreign keys' => array(),
    'indexes' => array(
      'family' => array(
        0 => 'family',
      ),
      'given' => array(
        0 => 'given',
      ),
    ),
    'locked' => 1,
    'module' => 'name',
    'settings' => array(
      'allow_family_or_given' => 0,
      'autocomplete_separator' => array(
        'credentials' => ', ',
        'family' => ' -',
        'generational' => ' ',
        'given' => ' -',
        'middle' => ' -',
        'title' => ' ',
      ),
      'autocomplete_source' => array(
        'credentials' => array(),
        'family' => array(),
        'generational' => array(
          0 => 'generation',
        ),
        'given' => array(),
        'middle' => array(),
        'title' => array(
          0 => 'title',
        ),
      ),
      'components' => array(
        'credentials' => 'credentials',
        'family' => 'family',
        'generational' => 'generational',
        'given' => 'given',
        'middle' => 'middle',
        'title' => 'title',
      ),
      'generational_options' => '-- --
Jr.
Sr.
I
II
III
IV
V
VI
VII
VIII
IX
X',
      'labels' => array(
        'credentials' => 'Credentials',
        'family' => 'Family',
        'generational' => 'Generational',
        'given' => 'Given',
        'middle' => 'Middle name(s)',
        'title' => 'Title',
      ),
      'max_length' => array(
        'credentials' => 255,
        'family' => 63,
        'generational' => 15,
        'given' => 63,
        'middle' => 127,
        'title' => 31,
      ),
      'minimum_components' => array(
        'given' => 'given',
      ),
      'sort_options' => array(
        'generational' => 0,
        'title' => 'title',
      ),
      'title_options' => '-- --
Mr.
Mrs.
Miss
Ms.
Dr.
Prof.',
    ),
    'translatable' => 0,
    'type' => 'name',
  );

  // Exported field_base: 'field_anschrift'
  $field_bases['field_anschrift'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_anschrift',
    'foreign keys' => array(),
    'indexes' => array(),
    'locked' => 0,
    'module' => 'addressfield',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'addressfield',
  );

  // Exported field_base: 'field_email'
  $field_bases['field_email'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_email',
    'foreign keys' => array(),
    'indexes' => array(),
    'locked' => 0,
    'module' => 'email',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'email',
  );

  // Exported field_base: 'field_loki'
  $field_bases['field_loki'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_loki',
    'foreign keys' => array(),
    'indexes' => array(
      'bbox' => array(
        0 => 'top',
        1 => 'bottom',
        2 => 'left',
        3 => 'right',
      ),
      'bottom' => array(
        0 => 'bottom',
      ),
      'centroid' => array(
        0 => 'lat',
        1 => 'lon',
      ),
      'geohash' => array(
        0 => 'geohash',
      ),
      'lat' => array(
        0 => 'lat',
      ),
      'left' => array(
        0 => 'left',
      ),
      'lon' => array(
        0 => 'lon',
      ),
      'right' => array(
        0 => 'right',
      ),
      'top' => array(
        0 => 'top',
      ),
    ),
    'locked' => 0,
    'module' => 'geofield',
    'settings' => array(
      'backend' => 'default',
      'srid' => 4326,
    ),
    'translatable' => 0,
    'type' => 'geofield',
  );

  // Exported field_base: 'field_telefon'
  $field_bases['field_telefon'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_telefon',
    'foreign keys' => array(),
    'indexes' => array(),
    'locked' => 0,
    'module' => 'cck_phone',
    'settings' => array(
      'size' => 15,
    ),
    'translatable' => 0,
    'type' => 'phone_number',
  );

  return $field_bases;
}
