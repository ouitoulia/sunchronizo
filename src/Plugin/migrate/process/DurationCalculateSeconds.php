<?php

namespace Drupal\sunchronizo\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;

/**
 * Provides a process plugin to calculate duration seconds.
 *
 * @MigrateProcessPlugin(
 *   id = "duration_calculate_seconds"
 * )
 */
class DurationCalculateSeconds extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    $duration_string = \Drupal::service('duration_field.service')->convertDateArrayToDurationString($value);
    $seconds = \Drupal::service('duration_field.service')->getSecondsFromDurationString($duration_string);
    return (string) $seconds;
  }
}
