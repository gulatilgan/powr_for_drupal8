<?php

namespace Drupal\powrfacebookfeed\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrfacebookfeed" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrfacebookfeed",
 *   label = @Translation("powrfacebookfeed Plugin")
 * )
 */
class powrfacebookfeed extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrfacebookfeed') . '/js/plugins/powrfacebookfeed/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_facebookfeed_icon = drupal_get_path('module', 'powrfacebookfeed') . '/js/plugins/powrfacebookfeed/icons/facebookfeed.png';
    $powr_icon = drupal_get_path('module', 'powrfacebookfeed') . '/js/plugins/powrfacebookfeed/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_facebookfeed' => [
        'label' => t('POWr Facebook Feed'),
        'image' => $powr_facebookfeed_icon,
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
