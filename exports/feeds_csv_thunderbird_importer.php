<?php
$feeds_importer = new stdClass();
$feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
$feeds_importer->api_version = 1;
$feeds_importer->id = 'thunderbird';
$feeds_importer->config = array(
  'name' => 'thunderbird',
  'description' => 'import files from thunderbird csv',
  'fetcher' => array(
    'plugin_key' => 'FeedsFileFetcher',
    'config' => array(
      'allowed_extensions' => 'txt csv tsv xml opml',
      'direct' => FALSE,
      'directory' => 'public://feeds',
      'allowed_schemes' => array(
        0 => 'public',
      ),
    ),
  ),
  'parser' => array(
    'plugin_key' => 'FeedsCSVParser',
    'config' => array(
      'delimiter' => ',',
      'no_headers' => 0,
    ),
  ),
  'processor' => array(
    'plugin_key' => 'CRMFeedsContactProcessor',
    'config' => array(
      'contact_type' => 'individual',
      'expire' => '-1',
      'author' => '1',
      'mappings' => array(
        0 => array(
          'source' => 'Nachname',
          'target' => 'contact_name:family',
          'unique' => FALSE,
        ),
        1 => array(
          'source' => 'Vorname',
          'target' => 'contact_name:given',
          'unique' => FALSE,
        ),
        2 => array(
          'source' => 'Primäre E-Mail-Adresse',
          'target' => 'field_email',
          'unique' => FALSE,
        ),
        3 => array(
          'source' => 'Dienstlich: Adresse',
          'target' => 'field_anschrift:thoroughfare',
          'unique' => FALSE,
        ),
        4 => array(
          'source' => 'Dienstlich: Ort',
          'target' => 'field_anschrift:locality',
          'unique' => FALSE,
        ),
        5 => array(
          'source' => 'Dienstlich: PLZ',
          'target' => 'field_anschrift:postal_code',
          'unique' => FALSE,
        ),
        6 => array(
          'source' => 'Dienstlich: Land',
          'target' => 'field_anschrift:country',
          'unique' => FALSE,
        ),
        7 => array(
          'source' => 'Dienstlich: Bundesland',
          'target' => 'field_anschrift:administrative_area',
          'unique' => FALSE,
        ),
        8 => array(
          'source' => 'Organisation',
          'target' => 'field_anschrift:organisation_name',
          'unique' => FALSE,
        ),
        9 => array(
          'source' => 'Website 1',
          'target' => 'field_website:url',
          'unique' => FALSE,
        ),
        10 => array(
          'source' => 'Notizen',
          'target' => 'field_xing:url',
          'unique' => FALSE,
        ),
      ),
      'update_existing' => '2',
      'input_format' => 'plain_text',
      'skip_hash_check' => 0,
      'bundle' => 'individual',
    ),
  ),
  'content_type' => '',
  'update' => 0,
  'import_period' => '-1',
  'expire_period' => 3600,
  'import_on_create' => 1,
  'process_in_background' => 0,
);

