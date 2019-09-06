<?php

namespace Drupal\powrwixlocal\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrwixlocal" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrwixlocal",
 *   label = @Translation("powrwixlocal Plugin")
 * )
 */
class powrwixlocal extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrwixlocal') . '/js/plugins/powrwixlocal/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_wixlocal_icon = drupal_get_path('module', 'powrwixlocal') . '/js/plugins/powrwixlocal/icons/wixlocal.png';
    $powr_icon = drupal_get_path('module', 'powrwixlocal') . '/js/plugins/powrwixlocal/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_wixlocal' => [
        'label' => t('POWr Wix Local'),
        'image' => $powr_wixlocal_icon,
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
