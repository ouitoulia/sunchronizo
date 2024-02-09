<?php

namespace Drupal\sunchronizo\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;

/**
 * Provides a process plugin to calculate duration string.
 *
 * @MigrateProcessPlugin(
 *   id = "duration_calculate_duration"
 * )
 */
class DurationCalculateDuration extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    // Convert the input array to ISO 8601 duration string.
    $duration_string = \Drupal::service('duration_field.service')->convertDateArrayToDurationString($value);

    return $duration_string;
  }
}
