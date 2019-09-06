<?php

namespace Drupal\powrpinterestfeed\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrpinterestfeed" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrpinterestfeed",
 *   label = @Translation("powrpinterestfeed Plugin")
 * )
 */
class powrpinterestfeed extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrpinterestfeed') . '/js/plugins/powrpinterestfeed/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_pinterestfeed_icon = drupal_get_path('module', 'powrpinterestfeed') . '/js/plugins/powrpinterestfeed/icons/pinterestfeed.png';
    $powr_icon = drupal_get_path('module', 'powrpinterestfeed') . '/js/plugins/powrpinterestfeed/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_pinterestfeed' => [
        'label' => t('POWr Pinterest Feed'),
        'image' => $powr_pinterestfeed_icon,
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
