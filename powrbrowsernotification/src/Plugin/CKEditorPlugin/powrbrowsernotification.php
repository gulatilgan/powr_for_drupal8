<?php

namespace Drupal\powrbrowsernotification\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrbrowsernotification" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrbrowsernotification",
 *   label = @Translation("powrbrowsernotification Plugin")
 * )
 */
class powrbrowsernotification extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrbrowsernotification') . '/js/plugins/powrbrowsernotification/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_browsernotification_icon = drupal_get_path('module', 'powrbrowsernotification') . '/js/plugins/powrbrowsernotification/icons/browsernotification.png';
    $powr_icon = drupal_get_path('module', 'powrbrowsernotification') . '/js/plugins/powrbrowsernotification/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_browsernotification' => [
        'label' => t('POWr Browser Notification'),
        'image' => $powr_browsernotification_icon,
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
