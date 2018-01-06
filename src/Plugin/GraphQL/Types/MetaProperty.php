<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Types;

use Drupal\graphql\Plugin\GraphQL\Types\TypePluginBase;

/**
 * The GraphQL type.
 *
 * @GraphQLType(
 *   id = "meta_property",
 *   name = "MetaProperty",
 *   interfaces = {"MetaTag"}
 * )
 */
class MetaProperty extends TypePluginBase {
}
