<?php

namespace Drupal\powrmap\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrmap" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrmap",
 *   label = @Translation("powrmap Plugin")
 * )
 */
class powrmap extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrmap') . '/js/plugins/powrmap/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_map_icon = drupal_get_path('module', 'powrmap') . '/js/plugins/powrmap/icons/map.png';
    $powr_icon = drupal_get_path('module', 'powrmap') . '/js/plugins/powrmap/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_map' => [
        'label' => t('POWr Map'),
        'image' => $powr_map_icon,
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
