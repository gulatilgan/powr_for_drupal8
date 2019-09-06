<?php

namespace Drupal\powrpoll\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrpoll" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrpoll",
 *   label = @Translation("powrpoll Plugin")
 * )
 */
class powrpoll extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrpoll') . '/js/plugins/powrpoll/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_poll_icon = drupal_get_path('module', 'powrpoll') . '/js/plugins/powrpoll/icons/poll.png';
    $powr_icon = drupal_get_path('module', 'powrpoll') . '/js/plugins/powrpoll/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_poll' => [
        'label' => t('POWr Poll'),
        'image' => $powr_poll_icon,
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
