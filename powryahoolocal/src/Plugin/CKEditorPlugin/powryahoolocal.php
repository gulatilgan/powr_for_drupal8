<?php

namespace Drupal\powryahoolocal\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powryahoolocal" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powryahoolocal",
 *   label = @Translation("powryahoolocal Plugin")
 * )
 */
class powryahoolocal extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powryahoolocal') . '/js/plugins/powryahoolocal/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_yahoolocal_icon = drupal_get_path('module', 'powryahoolocal') . '/js/plugins/powryahoolocal/icons/yahoolocal.png';
    $powr_icon = drupal_get_path('module', 'powryahoolocal') . '/js/plugins/powryahoolocal/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_yahoolocal' => [
        'label' => t('POWr Yahoo Local'),
        'image' => $powr_yahoolocal_icon,
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
