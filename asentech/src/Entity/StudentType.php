<?php

namespace Drupal\asentech\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Student type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "student_type",
 *   label = @Translation("Student type"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\asentech\Form\StudentTypeForm",
 *       "edit" = "Drupal\asentech\Form\StudentTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\asentech\StudentTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer student types",
 *   bundle_of = "student",
 *   config_prefix = "student_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/student_types/add",
 *     "edit-form" = "/admin/structure/student_types/manage/{student_type}",
 *     "delete-form" = "/admin/structure/student_types/manage/{student_type}/delete",
 *     "collection" = "/admin/structure/student_types"
 *   },
 *   config_export = {
 *     "id" = "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class StudentType extends ConfigEntityBundleBase {

  /**
   * The machine name of this student type.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the student type.
   *
   * @var string
   */
  public $label;

}
