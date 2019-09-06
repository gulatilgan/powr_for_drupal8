<?php

namespace Drupal\powrbannerslider\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrbannerslider" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrbannerslider",
 *   label = @Translation("powrbannerslider Plugin")
 * )
 */
class powrbannerslider extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrbannerslider') . '/js/plugins/powrbannerslider/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_bannerslider_icon = drupal_get_path('module', 'powrbannerslider') . '/js/plugins/powrbannerslider/icons/bannerslider.png';
    $powr_icon = drupal_get_path('module', 'powrbannerslider') . '/js/plugins/powrbannerslider/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_bannerslider' => [
        'label' => t('POWr Banner Slider'),
        'image' => $powr_bannerslider_icon,
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
