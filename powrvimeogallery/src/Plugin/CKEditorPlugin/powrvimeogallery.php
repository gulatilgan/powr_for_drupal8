<?php

namespace Drupal\powrvimeogallery\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrvimeogallery" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrvimeogallery",
 *   label = @Translation("powrvimeogallery Plugin")
 * )
 */
class powrvimeogallery extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrvimeogallery') . '/js/plugins/powrvimeogallery/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_vimeogallery_icon = drupal_get_path('module', 'powrvimeogallery') . '/js/plugins/powrvimeogallery/icons/vimeogallery.png';
    $powr_icon = drupal_get_path('module', 'powrvimeogallery') . '/js/plugins/powrvimeogallery/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_vimeogallery' => [
        'label' => t('POWr Vimeo Gallery'),
        'image' => $powr_vimeogallery_icon,
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
