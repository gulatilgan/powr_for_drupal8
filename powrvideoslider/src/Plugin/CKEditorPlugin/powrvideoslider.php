<?php

namespace Drupal\powrvideoslider\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrvideoslider" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrvideoslider",
 *   label = @Translation("powrvideoslider Plugin")
 * )
 */
class powrvideoslider extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrvideoslider') . '/js/plugins/powrvideoslider/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_videoslider_icon = drupal_get_path('module', 'powrvideoslider') . '/js/plugins/powrvideoslider/icons/videoslider.png';
    $powr_icon = drupal_get_path('module', 'powrvideoslider') . '/js/plugins/powrvideoslider/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_videoslider' => [
        'label' => t('POWr Video Slider'),
        'image' => $powr_videoslider_icon,
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
