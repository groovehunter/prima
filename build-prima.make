api = 2
core = 7.x

; Include Drupal core and any core patches from Build Kit
includes[] = http://drupalcode.org/project/buildkit.git/blob_plain/refs/heads/7.x-2.x:/drupal-org-core.make

defaults[projects][subdir] = "contrib"

projects[prima][type] = profile
projects[prima][download][type] = git
projects[prima][download][url] = https://github.com/groovehunter/prima.git
projects[prima][download][branch] = master

