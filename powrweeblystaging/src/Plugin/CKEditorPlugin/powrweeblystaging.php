<?php

namespace Drupal\powrweeblystaging\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrweeblystaging" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrweeblystaging",
 *   label = @Translation("powrweeblystaging Plugin")
 * )
 */
class powrweeblystaging extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrweeblystaging') . '/js/plugins/powrweeblystaging/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_weeblystaging_icon = drupal_get_path('module', 'powrweeblystaging') . '/js/plugins/powrweeblystaging/icons/weeblystaging.png';
    $powr_icon = drupal_get_path('module', 'powrweeblystaging') . '/js/plugins/powrweeblystaging/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_weeblystaging' => [
        'label' => t('POWr Weebly Staging'),
        'image' => $powr_weeblystaging_icon,
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
