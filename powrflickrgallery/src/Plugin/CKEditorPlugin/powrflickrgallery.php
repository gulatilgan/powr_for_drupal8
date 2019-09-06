<?php

namespace Drupal\powrflickrgallery\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrflickrgallery" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrflickrgallery",
 *   label = @Translation("powrflickrgallery Plugin")
 * )
 */
class powrflickrgallery extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrflickrgallery') . '/js/plugins/powrflickrgallery/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_flickrgallery_icon = drupal_get_path('module', 'powrflickrgallery') . '/js/plugins/powrflickrgallery/icons/flickrgallery.png';
    $powr_icon = drupal_get_path('module', 'powrflickrgallery') . '/js/plugins/powrflickrgallery/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_flickrgallery' => [
        'label' => t('POWr Flickr Gallery'),
        'image' => $powr_flickrgallery_icon,
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
