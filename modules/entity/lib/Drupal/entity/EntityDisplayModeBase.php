<?php

/**
 * @file
 * Contains \Drupal\entity\EntityDisplayModeBase.
 */

namespace Drupal\entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Base class for config entity types that hold settings for form and view modes.
 */
abstract class EntityDisplayModeBase extends ConfigEntityBase {

  /**
   * The ID of the form or view mode.
   *
   * @var string
   */
  public $id;

  /**
   * The UUID of the form or view mode.
   *
   * @var string
   */
  public $uuid;

  /**
   * The human-readable name of the form or view mode.
   *
   * @var string
   */
  public $label;

  /**
   * The entity type this form or view mode is used for.
   *
   * This is not to be confused with EntityViewMode::entityType which is
   * inherited from Entity::entityType.
   *
   * @var string
   */
  public $targetEntityType;

  /**
   * Whether or not this form or view mode has custom settings by default.
   *
   * If FALSE, entities displayed in this mode will reuse the 'default' display
   * settings by default (e.g. right after the module exposing the form or view
   * mode is enabled), but administrators can later use the Field UI to apply
   * custom display settings specific to the form or view mode.
   *
   * @var bool
   */
  public $status = FALSE;

}
