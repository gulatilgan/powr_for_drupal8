<?php

namespace Drupal\powrrssfeed\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrrssfeed" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrrssfeed",
 *   label = @Translation("powrrssfeed Plugin")
 * )
 */
class powrrssfeed extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrrssfeed') . '/js/plugins/powrrssfeed/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_rssfeed_icon = drupal_get_path('module', 'powrrssfeed') . '/js/plugins/powrrssfeed/icons/rssfeed.png';
    $powr_icon = drupal_get_path('module', 'powrrssfeed') . '/js/plugins/powrrssfeed/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_rssfeed' => [
        'label' => t('POWr RSS Feed'),
        'image' => $powr_rssfeed_icon,
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
