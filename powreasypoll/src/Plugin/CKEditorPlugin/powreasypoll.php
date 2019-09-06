<?php

namespace Drupal\powreasypoll\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powreasypoll" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powreasypoll",
 *   label = @Translation("powreasypoll Plugin")
 * )
 */
class powreasypoll extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powreasypoll') . '/js/plugins/powreasypoll/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_easypoll_icon = drupal_get_path('module', 'powreasypoll') . '/js/plugins/powreasypoll/icons/easypoll.png';
    $powr_icon = drupal_get_path('module', 'powreasypoll') . '/js/plugins/powreasypoll/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_easypoll' => [
        'label' => t('POWr Easy Poll'),
        'image' => $powr_easypoll_icon,
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
