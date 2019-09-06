<?php

namespace Drupal\powraboutus\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powraboutus" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powraboutus",
 *   label = @Translation("powraboutus Plugin")
 * )
 */
class powraboutus extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powraboutus') . '/js/plugins/powraboutus/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_aboutus_icon = drupal_get_path('module', 'powraboutus') . '/js/plugins/powraboutus/icons/aboutus.png';
    $powr_icon = drupal_get_path('module', 'powraboutus') . '/js/plugins/powraboutus/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_aboutus' => [
        'label' => t('POWr About Us'),
        'image' => $powr_aboutus_icon,
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
