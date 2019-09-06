<?php

namespace Drupal\powrphotogallery\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrphotogallery" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrphotogallery",
 *   label = @Translation("powrphotogallery Plugin")
 * )
 */
class powrphotogallery extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrphotogallery') . '/js/plugins/powrphotogallery/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_photogallery_icon = drupal_get_path('module', 'powrphotogallery') . '/js/plugins/powrphotogallery/icons/photogallery.png';
    $powr_icon = drupal_get_path('module', 'powrphotogallery') . '/js/plugins/powrphotogallery/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_photogallery' => [
        'label' => t('POWr Photo Gallery'),
        'image' => $powr_photogallery_icon,
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
