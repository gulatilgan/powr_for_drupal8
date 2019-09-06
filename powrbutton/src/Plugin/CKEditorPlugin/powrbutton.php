<?php

namespace Drupal\powrbutton\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrbutton" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrbutton",
 *   label = @Translation("powrbutton Plugin")
 * )
 */
class powrbutton extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrbutton') . '/js/plugins/powrbutton/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_button_icon = drupal_get_path('module', 'powrbutton') . '/js/plugins/powrbutton/icons/button.png';
    $powr_icon = drupal_get_path('module', 'powrbutton') . '/js/plugins/powrbutton/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_button' => [
        'label' => t('POWr Button'),
        'image' => $powr_button_icon,
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
