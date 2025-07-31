<?php
namespace Drupal\moduletheme_finder\Commands;

use Drush\Commands\DrushCommands;

/**
 * Drush commands.
 */
class ModuleThemeFinder extends DrushCommands {

  /**
   * Find a given module.
   *
   * @command where:module
   * @usage drush where:module <module name>
   */
  public function whereModule($module_name) {
    try {
      print  \Drupal::service('extension.list.module')->getPath($module_name) . "\n";
    } catch (\Exception $e) {
      print "The module, " . $module_name . ", could not be found." . "\n";
    }
  }

  /**
   * Find a given theme.
   *
   * @command where:theme
   * @usage drush where:theme <theme name>
   */
  public function whereTheme($theme_name) {
    try {
      print  \Drupal::service('extension.list.theme')->getPath($theme_name) . "\n";
    } catch (\Exception $e) {
      print "The theme, " . $theme_name . ", could not be found." . "\n";
    }
  }
}
