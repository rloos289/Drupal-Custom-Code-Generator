<?php

namespace Drupal\custom_api\Plugin\CustomApi\Node;

use Drupal\custom_api\Plugin\CustomApi\ApiFieldHelperTrait;

/**
 * Plugin implementation of the custom_api.
 *
 * @CustomgApi(
 *   id = "node_page",
 *   title = @Translation("Node page"),
 *   bundle = "page",
 *   custom_bundle = "page",
 *   entity_id = {},
 *   langcode = {},
 *   referenced_plugins = {},
 *   is_stub = {},
 * )
 */
class Page extends CustomApiNodeBase {

  use ApiFieldHelperTrait;

  /**
   * {@inheritDoc}
   */
  public function setCustomData($entity) {
    return [
    // Notes:
    // - Fields below are just a starting point, refine these down to the fields you actually want.
    // - The ->value function won't work for all fields and is just there to kickstart the process.
      'nid' => $entity->get('nid')->value,
      'uuid' => $entity->get('uuid')->value,
      'vid' => $entity->get('vid')->value,
      'langcode' => $entity->get('langcode')->value,
      'type' => $entity->get('type')->value,
      'revision_timestamp' => $entity->get('revision_timestamp')->value,
      'revision_uid' => $entity->get('revision_uid')->value,
      'revision_log' => $entity->get('revision_log')->value,
      'status' => $entity->get('status')->value,
      'uid' => $entity->get('uid')->value,
      'title' => $entity->get('title')->value,
      'created' => $entity->get('created')->value,
      'changed' => $entity->get('changed')->value,
      'promote' => $entity->get('promote')->value,
      'sticky' => $entity->get('sticky')->value,
      'default_langcode' => $entity->get('default_langcode')->value,
      'revision_default' => $entity->get('revision_default')->value,
      'revision_translation_affected' => $entity->get('revision_translation_affected')->value,
      'path' => $entity->get('path')->value,
      'body' => $entity->get('body')->value,
    ];
  }

}
