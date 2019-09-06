<?php

namespace Drupal\powrnotificationbar\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrnotificationbar" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrnotificationbar",
 *   label = @Translation("powrnotificationbar Plugin")
 * )
 */
class powrnotificationbar extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrnotificationbar') . '/js/plugins/powrnotificationbar/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_notificationbar_icon = drupal_get_path('module', 'powrnotificationbar') . '/js/plugins/powrnotificationbar/icons/notificationbar.png';
    $powr_icon = drupal_get_path('module', 'powrnotificationbar') . '/js/plugins/powrnotificationbar/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_notificationbar' => [
        'label' => t('POWr Notification Bar'),
        'image' => $powr_notificationbar_icon,
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
