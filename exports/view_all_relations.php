<?php
$view = new view();
$view->name = 'all_relations';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'relation';
$view->human_name = 'All relations';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'All relations';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['use_more_text'] = 'mehr';
$handler->display->display_options['access']['type'] = 'role';
$handler->display->display_options['access']['role'] = array(
  2 => '2',
);
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['submit_button'] = 'Anwenden';
$handler->display->display_options['exposed_form']['options']['reset_button_label'] = 'Zurücksetzen';
$handler->display->display_options['exposed_form']['options']['exposed_sorts_label'] = 'Sortieren nach';
$handler->display->display_options['exposed_form']['options']['sort_asc_label'] = 'Aufsteigend';
$handler->display->display_options['exposed_form']['options']['sort_desc_label'] = 'Absteigend';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '10';
$handler->display->display_options['pager']['options']['expose']['items_per_page_label'] = 'Elemente pro Seite';
$handler->display->display_options['pager']['options']['expose']['items_per_page_options_all_label'] = '- Alle -';
$handler->display->display_options['pager']['options']['tags']['first'] = '« erste Seite';
$handler->display->display_options['pager']['options']['tags']['previous'] = '‹ vorherige Seite';
$handler->display->display_options['pager']['options']['tags']['next'] = 'nächste Seite ›';
$handler->display->display_options['pager']['options']['tags']['last'] = 'letzte Seite »';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'endpoints' => 'endpoints',
  'relation_type' => 'relation_type',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'endpoints' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'relation_type' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
/* Feld: Beziehung: endpoints */
$handler->display->display_options['fields']['endpoints']['id'] = 'endpoints';
$handler->display->display_options['fields']['endpoints']['table'] = 'field_data_endpoints';
$handler->display->display_options['fields']['endpoints']['field'] = 'endpoints';
$handler->display->display_options['fields']['endpoints']['click_sort_column'] = 'entity_type';
$handler->display->display_options['fields']['endpoints']['delta_offset'] = '0';
/* Feld: Beziehung: Relationstyp */
$handler->display->display_options['fields']['relation_type']['id'] = 'relation_type';
$handler->display->display_options['fields']['relation_type']['table'] = 'relation';
$handler->display->display_options['fields']['relation_type']['field'] = 'relation_type';
$handler->display->display_options['fields']['relation_type']['label'] = 'Relation type';
/* Feld: Beziehung: Link löschen */
$handler->display->display_options['fields']['delete']['id'] = 'delete';
$handler->display->display_options['fields']['delete']['table'] = 'relation';
$handler->display->display_options['fields']['delete']['field'] = 'delete';
$handler->display->display_options['fields']['delete']['label'] = 'Del';
/* Feld: Beziehung: ‚Bearbeiten‘-Link */
$handler->display->display_options['fields']['edit']['id'] = 'edit';
$handler->display->display_options['fields']['edit']['table'] = 'relation';
$handler->display->display_options['fields']['edit']['field'] = 'edit';
$handler->display->display_options['fields']['edit']['label'] = 'Edit link';

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['path'] = 'all-relations';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'All relations';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['context'] = 0;
$handler->display->display_options['menu']['context_only_inline'] = 0;
$translatables['all_relations'] = array(
  t('Master'),
  t('All relations'),
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
  t('endpoints'),
  t('Relation type'),
  t('Del'),
  t('Edit link'),
  t('Page'),
);

