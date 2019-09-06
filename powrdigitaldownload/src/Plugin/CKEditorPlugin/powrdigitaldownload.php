<?php

namespace Drupal\powrdigitaldownload\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrdigitaldownload" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrdigitaldownload",
 *   label = @Translation("powrdigitaldownload Plugin")
 * )
 */
class powrdigitaldownload extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrdigitaldownload') . '/js/plugins/powrdigitaldownload/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_digitaldownload_icon = drupal_get_path('module', 'powrdigitaldownload') . '/js/plugins/powrdigitaldownload/icons/digitaldownload.png';
    $powr_icon = drupal_get_path('module', 'powrdigitaldownload') . '/js/plugins/powrdigitaldownload/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_digitaldownload' => [
        'label' => t('POWr Digital Download'),
        'image' => $powr_digitaldownload_icon,
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
