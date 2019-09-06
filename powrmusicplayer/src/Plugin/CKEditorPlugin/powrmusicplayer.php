<?php

namespace Drupal\powrmusicplayer\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrmusicplayer" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrmusicplayer",
 *   label = @Translation("powrmusicplayer Plugin")
 * )
 */
class powrmusicplayer extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrmusicplayer') . '/js/plugins/powrmusicplayer/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_musicplayer_icon = drupal_get_path('module', 'powrmusicplayer') . '/js/plugins/powrmusicplayer/icons/musicplayer.png';
    $powr_icon = drupal_get_path('module', 'powrmusicplayer') . '/js/plugins/powrmusicplayer/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_musicplayer' => [
        'label' => t('POWr Music Player'),
        'image' => $powr_musicplayer_icon,
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
