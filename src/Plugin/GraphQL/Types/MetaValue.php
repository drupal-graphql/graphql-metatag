<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Types;

use Drupal\graphql\Plugin\GraphQL\Types\TypePluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * @GraphQLType(
 *   id = "meta_value",
 *   name = "MetaValue",
 *   interfaces = {"Metatag"}
 * )
 */
class MetaValue extends TypePluginBase {

  /**
   * {@inheritdoc}
   */
  public function applies($object, ResolveInfo $info = NULL) {
    if (isset($object['#tag']) && $object['#tag'] === 'meta') {
      return !array_key_exists('property', $object['#attributes']);
    }

    return FALSE;
  }

}
