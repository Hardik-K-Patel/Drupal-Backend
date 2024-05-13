<?php

/**
 * @file
 * Contains \Drupal\module_name\Plugin\Block\ExampleBlock.
 */

namespace Drupal\module_name\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Provides a 'example' block.
 *
 * @Block(
 *   id = "example_block",
 *   admin_label = @Translation("Example block"),
 *   category = @Translation("Custom example block example")
 * )
 */

class ExampleBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        return [
            '#theme' => 'module_name_block',
            '#description' => 'Example block description',
            '#attached' => [
              'library' => 'module_name/module-name-app',
            ],
        ];
    }
}
