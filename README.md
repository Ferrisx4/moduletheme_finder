# Drupal Module Theme Finder

This module simply adds two drush commands to help you locate, on disk, your modules and themes.
Sometimes they are in unexpected places!

---

## Usage

### Find a module.
Simply run the following drush command to find a module:

```shell
drush where:module <module_name>
```

Example:
```shell
# Find this module:
drush where:module moduletheme_finder

# Example result:
modules/custom/moduletheme_finder
```
---

### Find a theme.
Simply run the following drush command to find a theme:
```shell
drush where:theme <theme_name>
```

Example:
```shell
# Find one of Drupal's default themes:
drush where:theme claro

# Example result:
core/themes/claro
```