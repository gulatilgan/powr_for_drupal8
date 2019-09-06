<?php

namespace Drupal\powrimageslider\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrimageslider" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrimageslider",
 *   label = @Translation("powrimageslider Plugin")
 * )
 */
class powrimageslider extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrimageslider') . '/js/plugins/powrimageslider/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_imageslider_icon = drupal_get_path('module', 'powrimageslider') . '/js/plugins/powrimageslider/icons/imageslider.png';
    $powr_icon = drupal_get_path('module', 'powrimageslider') . '/js/plugins/powrimageslider/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_imageslider' => [
        'label' => t('POWr Image Slider'),
        'image' => $powr_imageslider_icon,
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
