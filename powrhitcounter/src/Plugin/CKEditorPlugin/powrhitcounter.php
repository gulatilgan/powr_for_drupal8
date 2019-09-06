<?php

namespace Drupal\powrhitcounter\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrhitcounter" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrhitcounter",
 *   label = @Translation("powrhitcounter Plugin")
 * )
 */
class powrhitcounter extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrhitcounter') . '/js/plugins/powrhitcounter/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_hitcounter_icon = drupal_get_path('module', 'powrhitcounter') . '/js/plugins/powrhitcounter/icons/hitcounter.png';
    $powr_icon = drupal_get_path('module', 'powrhitcounter') . '/js/plugins/powrhitcounter/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_hitcounter' => [
        'label' => t('POWr Hit Counter'),
        'image' => $powr_hitcounter_icon,
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
