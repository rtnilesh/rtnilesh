<?php

namespace Drupal\asentech;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a student entity type.
 */
interface StudentInterface extends ContentEntityInterface, EntityChangedInterface {

  /**
   * Gets the student creation timestamp.
   *
   * @return int
   *   Creation timestamp of the student.
   */
  public function getCreatedTime();

  /**
   * Sets the student creation timestamp.
   *
   * @param int $timestamp
   *   The student creation timestamp.
   *
   * @return \Drupal\asentech\StudentInterface
   *   The called student entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the student status.
   *
   * @return bool
   *   TRUE if the student is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the student status.
   *
   * @param bool $status
   *   TRUE to enable this student, FALSE to disable.
   *
   * @return \Drupal\asentech\StudentInterface
   *   The called student entity.
   */
  public function setStatus($status);

}
