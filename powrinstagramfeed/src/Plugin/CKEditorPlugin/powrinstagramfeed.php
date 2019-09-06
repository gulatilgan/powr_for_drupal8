<?php

namespace Drupal\powrinstagramfeed\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrinstagramfeed" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrinstagramfeed",
 *   label = @Translation("powrinstagramfeed Plugin")
 * )
 */
class powrinstagramfeed extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrinstagramfeed') . '/js/plugins/powrinstagramfeed/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_instagramfeed_icon = drupal_get_path('module', 'powrinstagramfeed') . '/js/plugins/powrinstagramfeed/icons/instagramfeed.png';
    $powr_icon = drupal_get_path('module', 'powrinstagramfeed') . '/js/plugins/powrinstagramfeed/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_instagramfeed' => [
        'label' => t('POWr Instagram Feed'),
        'image' => $powr_instagramfeed_icon,
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
