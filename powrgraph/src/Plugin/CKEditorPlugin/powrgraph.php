<?php

namespace Drupal\powrgraph\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrgraph" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrgraph",
 *   label = @Translation("powrgraph Plugin")
 * )
 */
class powrgraph extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

  /**
   * {@inheritdoc}
   */
  public function isEnabled(Editor $editor) {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'powrgraph') . '/js/plugins/powrgraph/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_graph_icon = drupal_get_path('module', 'powrgraph') . '/js/plugins/powrgraph/icons/graph.png';
    $powr_icon = drupal_get_path('module', 'powrgraph') . '/js/plugins/powrgraph/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_graph' => [
        'label' => t('POWr Graph'),
        'image' => $powr_graph_icon,
      ]
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

}
