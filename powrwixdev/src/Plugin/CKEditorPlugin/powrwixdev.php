<?php

namespace Drupal\powrwixdev\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrwixdev" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrwixdev",
 *   label = @Translation("powrwixdev Plugin")
 * )
 */
class powrwixdev extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrwixdev') . '/js/plugins/powrwixdev/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_wixdev_icon = drupal_get_path('module', 'powrwixdev') . '/js/plugins/powrwixdev/icons/wixdev.png';
    $powr_icon = drupal_get_path('module', 'powrwixdev') . '/js/plugins/powrwixdev/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_wixdev' => [
        'label' => t('POWr Wix Dev'),
        'image' => $powr_wixdev_icon,
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
