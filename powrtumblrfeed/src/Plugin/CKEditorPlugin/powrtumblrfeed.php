<?php

namespace Drupal\powrtumblrfeed\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrtumblrfeed" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrtumblrfeed",
 *   label = @Translation("powrtumblrfeed Plugin")
 * )
 */
class powrtumblrfeed extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrtumblrfeed') . '/js/plugins/powrtumblrfeed/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_tumblrfeed_icon = drupal_get_path('module', 'powrtumblrfeed') . '/js/plugins/powrtumblrfeed/icons/tumblrfeed.png';
    $powr_icon = drupal_get_path('module', 'powrtumblrfeed') . '/js/plugins/powrtumblrfeed/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_tumblrfeed' => [
        'label' => t('POWr Tumblr Feed'),
        'image' => $powr_tumblrfeed_icon,
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
