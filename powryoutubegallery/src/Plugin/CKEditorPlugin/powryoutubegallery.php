<?php

namespace Drupal\powryoutubegallery\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powryoutubegallery" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powryoutubegallery",
 *   label = @Translation("powryoutubegallery Plugin")
 * )
 */
class powryoutubegallery extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powryoutubegallery') . '/js/plugins/powryoutubegallery/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_youtubegallery_icon = drupal_get_path('module', 'powryoutubegallery') . '/js/plugins/powryoutubegallery/icons/youtubegallery.png';
    $powr_icon = drupal_get_path('module', 'powryoutubegallery') . '/js/plugins/powryoutubegallery/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_youtubegallery' => [
        'label' => t('POWr YouTube Gallery'),
        'image' => $powr_youtubegallery_icon,
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
