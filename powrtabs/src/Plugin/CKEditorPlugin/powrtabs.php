<?php

namespace Drupal\powrtabs\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrtabs" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrtabs",
 *   label = @Translation("powrtabs Plugin")
 * )
 */
class powrtabs extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrtabs') . '/js/plugins/powrtabs/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_tabs_icon = drupal_get_path('module', 'powrtabs') . '/js/plugins/powrtabs/icons/tabs.png';
    $powr_icon = drupal_get_path('module', 'powrtabs') . '/js/plugins/powrtabs/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_tabs' => [
        'label' => t('POWr Tabs'),
        'image' => $powr_tabs_icon,
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
