<?php

namespace Drupal\powrchat\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrchat" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrchat",
 *   label = @Translation("powrchat Plugin")
 * )
 */
class powrchat extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrchat') . '/js/plugins/powrchat/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_chat_icon = drupal_get_path('module', 'powrchat') . '/js/plugins/powrchat/icons/chat.png';
    $powr_icon = drupal_get_path('module', 'powrchat') . '/js/plugins/powrchat/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_chat' => [
        'label' => t('POWr Chat'),
        'image' => $powr_chat_icon,
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
