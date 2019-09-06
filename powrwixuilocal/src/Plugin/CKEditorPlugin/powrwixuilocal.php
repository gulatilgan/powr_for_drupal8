<?php

namespace Drupal\powrwixuilocal\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrwixuilocal" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrwixuilocal",
 *   label = @Translation("powrwixuilocal Plugin")
 * )
 */
class powrwixuilocal extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrwixuilocal') . '/js/plugins/powrwixuilocal/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_wixuilocal_icon = drupal_get_path('module', 'powrwixuilocal') . '/js/plugins/powrwixuilocal/icons/wixuilocal.png';
    $powr_icon = drupal_get_path('module', 'powrwixuilocal') . '/js/plugins/powrwixuilocal/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_wixuilocal' => [
        'label' => t('POWr Wix UI Local'),
        'image' => $powr_wixuilocal_icon,
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
