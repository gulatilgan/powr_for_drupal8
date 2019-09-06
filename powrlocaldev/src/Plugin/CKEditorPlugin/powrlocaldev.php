<?php

namespace Drupal\powrlocaldev\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrlocaldev" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrlocaldev",
 *   label = @Translation("powrlocaldev Plugin")
 * )
 */
class powrlocaldev extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrlocaldev') . '/js/plugins/powrlocaldev/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_localdev_icon = drupal_get_path('module', 'powrlocaldev') . '/js/plugins/powrlocaldev/icons/localdev.png';
    $powr_icon = drupal_get_path('module', 'powrlocaldev') . '/js/plugins/powrlocaldev/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_localdev' => [
        'label' => t('POWr Local Dev'),
        'image' => $powr_localdev_icon,
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
