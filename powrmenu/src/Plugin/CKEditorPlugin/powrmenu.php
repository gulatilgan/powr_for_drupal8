<?php

namespace Drupal\powrmenu\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrmenu" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrmenu",
 *   label = @Translation("powrmenu Plugin")
 * )
 */
class powrmenu extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrmenu') . '/js/plugins/powrmenu/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_menu_icon = drupal_get_path('module', 'powrmenu') . '/js/plugins/powrmenu/icons/menu.png';
    $powr_icon = drupal_get_path('module', 'powrmenu') . '/js/plugins/powrmenu/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_menu' => [
        'label' => t('POWr Menu'),
        'image' => $powr_menu_icon,
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
