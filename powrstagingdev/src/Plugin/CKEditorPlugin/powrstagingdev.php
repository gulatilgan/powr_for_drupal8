<?php

namespace Drupal\powrstagingdev\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrstagingdev" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrstagingdev",
 *   label = @Translation("powrstagingdev Plugin")
 * )
 */
class powrstagingdev extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrstagingdev') . '/js/plugins/powrstagingdev/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_stagingdev_icon = drupal_get_path('module', 'powrstagingdev') . '/js/plugins/powrstagingdev/icons/stagingdev.png';
    $powr_icon = drupal_get_path('module', 'powrstagingdev') . '/js/plugins/powrstagingdev/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_stagingdev' => [
        'label' => t('POWr Staging Dev'),
        'image' => $powr_stagingdev_icon,
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
