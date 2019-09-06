<?php

namespace Drupal\powrvideogallery\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrvideogallery" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrvideogallery",
 *   label = @Translation("powrvideogallery Plugin")
 * )
 */
class powrvideogallery extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrvideogallery') . '/js/plugins/powrvideogallery/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_videogallery_icon = drupal_get_path('module', 'powrvideogallery') . '/js/plugins/powrvideogallery/icons/videogallery.png';
    $powr_icon = drupal_get_path('module', 'powrvideogallery') . '/js/plugins/powrvideogallery/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_videogallery' => [
        'label' => t('POWr Video Gallery'),
        'image' => $powr_videogallery_icon,
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
