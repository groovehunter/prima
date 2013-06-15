PRIMA
Personal Relationships and Information MAnagement
=================================================

A customized CRM for personal management of contacts and more


INSTALL
=======

THIS IS NOT WORKING YET!

required: defaults for site install in drushrc,php

drush make https://raw.github.com/groovehunter/prima/master/build-prima.make -y
drush si prima -y

cd sites/default
drush en en crm_core_relationship_ui
drush en l10n_update


features
prima_contact_type_person
prima_contact_type_organisation


