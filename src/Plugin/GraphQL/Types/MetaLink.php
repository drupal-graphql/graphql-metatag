<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Types;

use Drupal\graphql\Plugin\GraphQL\Types\TypePluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * @GraphQLType(
 *   id = "meta_link",
 *   name = "MetaLink",
 *   interfaces = {"Metatag"}
 * )
 */
class MetaLink extends TypePluginBase {

  /**
   * {@inheritdoc}
   */
  public function applies($object, ResolveInfo $info = NULL) {
    return isset($object['#tag']) && $object['#tag'] === 'link';
  }

}
