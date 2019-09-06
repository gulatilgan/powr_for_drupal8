<?php

namespace Drupal\powrtwitterfeed\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrtwitterfeed" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrtwitterfeed",
 *   label = @Translation("powrtwitterfeed Plugin")
 * )
 */
class powrtwitterfeed extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrtwitterfeed') . '/js/plugins/powrtwitterfeed/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_twitterfeed_icon = drupal_get_path('module', 'powrtwitterfeed') . '/js/plugins/powrtwitterfeed/icons/twitterfeed.png';
    $powr_icon = drupal_get_path('module', 'powrtwitterfeed') . '/js/plugins/powrtwitterfeed/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_twitterfeed' => [
        'label' => t('POWr Twitter Feed'),
        'image' => $powr_twitterfeed_icon,
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
