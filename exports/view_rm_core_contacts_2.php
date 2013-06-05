<?php
$view = new view();
$view->name = 'crm_core_contacts_2';
$view->description = 'A list of all contacts in the system';
$view->tag = '';
$view->base_table = 'crm_core_contact';
$view->human_name = 'crm_core_contacts_2';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['title'] = 'Contacts';
$handler->display->display_options['use_more'] = TRUE;
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['use_more_text'] = 'mehr';
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'view any crm_core_contact entity';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['submit_button'] = 'Anwenden';
$handler->display->display_options['exposed_form']['options']['reset_button'] = TRUE;
$handler->display->display_options['exposed_form']['options']['reset_button_label'] = 'Zurücksetzen';
$handler->display->display_options['exposed_form']['options']['exposed_sorts_label'] = 'Sortieren nach';
$handler->display->display_options['exposed_form']['options']['sort_asc_label'] = 'Aufsteigend';
$handler->display->display_options['exposed_form']['options']['sort_desc_label'] = 'Absteigend';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '50';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['pager']['options']['id'] = '0';
$handler->display->display_options['pager']['options']['quantity'] = '9';
$handler->display->display_options['pager']['options']['expose']['items_per_page_label'] = 'Elemente pro Seite';
$handler->display->display_options['pager']['options']['expose']['items_per_page_options_all_label'] = '- Alle -';
$handler->display->display_options['pager']['options']['tags']['first'] = '« erste Seite';
$handler->display->display_options['pager']['options']['tags']['previous'] = '‹ vorherige Seite';
$handler->display->display_options['pager']['options']['tags']['next'] = 'nächste Seite ›';
$handler->display->display_options['pager']['options']['tags']['last'] = 'letzte Seite »';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'contact_id' => 'contact_id',
  'contact_name' => 'contact_name',
  'type' => 'type',
  'nothing_1' => 'nothing_1',
  'nothing_2' => 'nothing_2',
  'nothing_3' => 'nothing_3',
  'field_email' => 'field_email',
  'field_telefon' => 'field_telefon',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'contact_id' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'contact_name' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'type' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'nothing_1' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'nothing_2' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'nothing_3' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'field_email' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'field_telefon' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
/* Kopfbereich: Global: Result summary */
$handler->display->display_options['header']['result']['id'] = 'result';
$handler->display->display_options['header']['result']['table'] = 'views';
$handler->display->display_options['header']['result']['field'] = 'result';
/* Verhalten, wenn keine Ergebnisse vorliegen: Global: Textbereich */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['empty'] = TRUE;
$handler->display->display_options['empty']['area']['content'] = 'There are no contacts available. <a href="contact/add">Add one now</a>.';
$handler->display->display_options['empty']['area']['format'] = 'filtered_html';
/* Feld: Stapelverarbeitungen: CRM Contact */
$handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
$handler->display->display_options['fields']['views_bulk_operations']['table'] = 'crm_core_contact';
$handler->display->display_options['fields']['views_bulk_operations']['field'] = 'views_bulk_operations';
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_type'] = '0';
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['enable_select_all_pages'] = 1;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['force_single'] = 0;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['entity_load_capacity'] = '10';
$handler->display->display_options['fields']['views_bulk_operations']['vbo_operations'] = array(
  'action::views_bulk_operations_argument_selector_action' => array(
    'selected' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
    'settings' => array(
      'url' => '',
    ),
  ),
  'action::system_send_email_action' => array(
    'selected' => 0,
    'postpone_processing' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_delete_item' => array(
    'selected' => 1,
    'postpone_processing' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_modify_action' => array(
    'selected' => 1,
    'postpone_processing' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
    'settings' => array(
      'show_all_tokens' => 1,
      'display_values' => array(
        '_all_' => '_all_',
      ),
    ),
  ),
  'action::views_bulk_operations_script_action' => array(
    'selected' => 0,
    'postpone_processing' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
);
/* Feld: CRM Contact: Contact ID */
$handler->display->display_options['fields']['contact_id']['id'] = 'contact_id';
$handler->display->display_options['fields']['contact_id']['table'] = 'crm_core_contact';
$handler->display->display_options['fields']['contact_id']['field'] = 'contact_id';
$handler->display->display_options['fields']['contact_id']['exclude'] = TRUE;
$handler->display->display_options['fields']['contact_id']['link_to_contact'] = 0;
/* Feld: CRM Contact: Household name */
$handler->display->display_options['fields']['contact_name']['id'] = 'contact_name';
$handler->display->display_options['fields']['contact_name']['table'] = 'field_data_contact_name';
$handler->display->display_options['fields']['contact_name']['field'] = 'contact_name';
$handler->display->display_options['fields']['contact_name']['label'] = 'Name';
$handler->display->display_options['fields']['contact_name']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['contact_name']['alter']['path'] = 'crm-core/contact/[contact_id]';
$handler->display->display_options['fields']['contact_name']['click_sort_column'] = 'title';
$handler->display->display_options['fields']['contact_name']['settings'] = array(
  'format' => 'default',
  'markup' => 0,
  'output' => 'default',
  'multiple' => 'default',
  'multiple_delimiter' => ', ',
  'multiple_and' => 'text',
  'multiple_delimiter_precedes_last' => 'never',
  'multiple_el_al_min' => '3',
  'multiple_el_al_first' => '1',
);
/* Feld: CRM Contact: Contact Type */
$handler->display->display_options['fields']['type']['id'] = 'type';
$handler->display->display_options['fields']['type']['table'] = 'crm_core_contact';
$handler->display->display_options['fields']['type']['field'] = 'type';
$handler->display->display_options['fields']['type']['label'] = 'Typ';
$handler->display->display_options['fields']['type']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['type']['link_to_contact'] = 0;
/* Feld: Global: Benutzerdefinierter Text */
$handler->display->display_options['fields']['nothing_1']['id'] = 'nothing_1';
$handler->display->display_options['fields']['nothing_1']['table'] = 'views';
$handler->display->display_options['fields']['nothing_1']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing_1']['label'] = 'Edit Link';
$handler->display->display_options['fields']['nothing_1']['exclude'] = TRUE;
$handler->display->display_options['fields']['nothing_1']['alter']['text'] = 'Edit';
$handler->display->display_options['fields']['nothing_1']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['nothing_1']['alter']['path'] = 'crm-core/contact/[contact_id]/edit';
/* Feld: Global: Benutzerdefinierter Text */
$handler->display->display_options['fields']['nothing_2']['id'] = 'nothing_2';
$handler->display->display_options['fields']['nothing_2']['table'] = 'views';
$handler->display->display_options['fields']['nothing_2']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing_2']['label'] = 'Delete Link';
$handler->display->display_options['fields']['nothing_2']['exclude'] = TRUE;
$handler->display->display_options['fields']['nothing_2']['alter']['text'] = 'Delete';
$handler->display->display_options['fields']['nothing_2']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['nothing_2']['alter']['path'] = 'crm-core/contact/[contact_id]/delete';
/* Feld: Global: Benutzerdefinierter Text */
$handler->display->display_options['fields']['nothing_3']['id'] = 'nothing_3';
$handler->display->display_options['fields']['nothing_3']['table'] = 'views';
$handler->display->display_options['fields']['nothing_3']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing_3']['label'] = 'Operations';
$handler->display->display_options['fields']['nothing_3']['alter']['text'] = '[nothing_1] [nothing_2]';
/* Feld: CRM Contact: Email */
$handler->display->display_options['fields']['field_email']['id'] = 'field_email';
$handler->display->display_options['fields']['field_email']['table'] = 'field_data_field_email';
$handler->display->display_options['fields']['field_email']['field'] = 'field_email';
$handler->display->display_options['fields']['field_email']['label'] = 'E-Mail';
$handler->display->display_options['fields']['field_email']['delta_offset'] = '0';
/* Feld: CRM Contact: Telefon */
$handler->display->display_options['fields']['field_telefon']['id'] = 'field_telefon';
$handler->display->display_options['fields']['field_telefon']['table'] = 'field_data_field_telefon';
$handler->display->display_options['fields']['field_telefon']['field'] = 'field_telefon';
$handler->display->display_options['fields']['field_telefon']['click_sort_column'] = 'number';
$handler->display->display_options['fields']['field_telefon']['delta_offset'] = '0';
/* Sortierkriterien: CRM Contact: Aktualisierungszeitpunkt */
$handler->display->display_options['sorts']['changed']['id'] = 'changed';
$handler->display->display_options['sorts']['changed']['table'] = 'crm_core_contact';
$handler->display->display_options['sorts']['changed']['field'] = 'changed';
$handler->display->display_options['sorts']['changed']['order'] = 'DESC';
/* Filterkriterium: CRM Contact Types: Disabled contact type */
$handler->display->display_options['filters']['disabled']['id'] = 'disabled';
$handler->display->display_options['filters']['disabled']['table'] = 'crm_core_contact_type';
$handler->display->display_options['filters']['disabled']['field'] = 'disabled';
$handler->display->display_options['filters']['disabled']['value']['value'] = '0';
/* Filterkriterium: CRM Contact: Contact Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'crm_core_contact';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['exposed'] = TRUE;
$handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
$handler->display->display_options['filters']['type']['expose']['label'] = 'Contact Type';
$handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
$handler->display->display_options['filters']['type']['expose']['identifier'] = 'type';
/* Filterkriterium: CRM Contact: Household name */
$handler->display->display_options['filters']['contact_name']['id'] = 'contact_name';
$handler->display->display_options['filters']['contact_name']['table'] = 'field_data_contact_name';
$handler->display->display_options['filters']['contact_name']['field'] = 'contact_name';
$handler->display->display_options['filters']['contact_name']['exposed'] = TRUE;
$handler->display->display_options['filters']['contact_name']['expose']['operator_id'] = 'contact_name_op';
$handler->display->display_options['filters']['contact_name']['expose']['label'] = 'Contact Name';
$handler->display->display_options['filters']['contact_name']['expose']['operator'] = 'contact_name_op';
$handler->display->display_options['filters']['contact_name']['expose']['identifier'] = 'contact_name';
$handler->display->display_options['filters']['contact_name']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
);

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'crm-core/contact';
$handler->display->display_options['menu']['type'] = 'tab';
$handler->display->display_options['menu']['title'] = 'Kontakte';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['context'] = 0;
$handler->display->display_options['menu']['context_only_inline'] = 0;
$translatables['crm_core_contacts_2'] = array(
  t('Defaults'),
  t('Contacts'),
  t('mehr'),
  t('Anwenden'),
  t('Zurücksetzen'),
  t('Sortieren nach'),
  t('Aufsteigend'),
  t('Absteigend'),
  t('Elemente pro Seite'),
  t('- Alle -'),
  t('Offset'),
  t('« erste Seite'),
  t('‹ vorherige Seite'),
  t('nächste Seite ›'),
  t('letzte Seite »'),
  t('Displaying @start - @end of @total'),
  t('There are no contacts available. <a href="contact/add">Add one now</a>.'),
  t('CRM Contact'),
  t('Contact ID'),
  t('Name'),
  t('Typ'),
  t('Edit Link'),
  t('Edit'),
  t('Delete Link'),
  t('Delete'),
  t('Operations'),
  t('[nothing_1] [nothing_2]'),
  t('E-Mail'),
  t('Telefon'),
  t('Contact Type'),
  t('Contact Name'),
  t('Page'),
);

