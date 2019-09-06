<?php

namespace Drupal\powrmediagallery\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrmediagallery" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrmediagallery",
 *   label = @Translation("powrmediagallery Plugin")
 * )
 */
class powrmediagallery extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrmediagallery') . '/js/plugins/powrmediagallery/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_mediagallery_icon = drupal_get_path('module', 'powrmediagallery') . '/js/plugins/powrmediagallery/icons/mediagallery.png';
    $powr_icon = drupal_get_path('module', 'powrmediagallery') . '/js/plugins/powrmediagallery/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_mediagallery' => [
        'label' => t('POWr Media Gallery'),
        'image' => $powr_mediagallery_icon,
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
