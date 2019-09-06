<?php

namespace Drupal\powrweeblydemo\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrweeblydemo" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrweeblydemo",
 *   label = @Translation("powrweeblydemo Plugin")
 * )
 */
class powrweeblydemo extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrweeblydemo') . '/js/plugins/powrweeblydemo/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_weeblydemo_icon = drupal_get_path('module', 'powrweeblydemo') . '/js/plugins/powrweeblydemo/icons/weeblydemo.png';
    $powr_icon = drupal_get_path('module', 'powrweeblydemo') . '/js/plugins/powrweeblydemo/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_weeblydemo' => [
        'label' => t('POWr Weebly Demo'),
        'image' => $powr_weeblydemo_icon,
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
