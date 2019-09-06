<?php

namespace Drupal\powrfileembed\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrfileembed" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrfileembed",
 *   label = @Translation("powrfileembed Plugin")
 * )
 */
class powrfileembed extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrfileembed') . '/js/plugins/powrfileembed/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_fileembed_icon = drupal_get_path('module', 'powrfileembed') . '/js/plugins/powrfileembed/icons/fileembed.png';
    $powr_icon = drupal_get_path('module', 'powrfileembed') . '/js/plugins/powrfileembed/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_fileembed' => [
        'label' => t('POWr File Embed'),
        'image' => $powr_fileembed_icon,
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
