<?php

namespace Drupal\powrmultislider\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrmultislider" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrmultislider",
 *   label = @Translation("powrmultislider Plugin")
 * )
 */
class powrmultislider extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrmultislider') . '/js/plugins/powrmultislider/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_multislider_icon = drupal_get_path('module', 'powrmultislider') . '/js/plugins/powrmultislider/icons/multislider.png';
    $powr_icon = drupal_get_path('module', 'powrmultislider') . '/js/plugins/powrmultislider/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_multislider' => [
        'label' => t('POWr Multi Slider'),
        'image' => $powr_multislider_icon,
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
