<?php

namespace Drupal\powrcountuptimer\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrcountuptimer" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrcountuptimer",
 *   label = @Translation("powrcountuptimer Plugin")
 * )
 */
class powrcountuptimer extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrcountuptimer') . '/js/plugins/powrcountuptimer/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_countuptimer_icon = drupal_get_path('module', 'powrcountuptimer') . '/js/plugins/powrcountuptimer/icons/countuptimer.png';
    $powr_icon = drupal_get_path('module', 'powrcountuptimer') . '/js/plugins/powrcountuptimer/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_countuptimer' => [
        'label' => t('POWr Count Up Timer'),
        'image' => $powr_countuptimer_icon,
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
