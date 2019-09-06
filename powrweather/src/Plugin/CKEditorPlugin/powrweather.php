<?php

namespace Drupal\powrweather\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrweather" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrweather",
 *   label = @Translation("powrweather Plugin")
 * )
 */
class powrweather extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrweather') . '/js/plugins/powrweather/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_weather_icon = drupal_get_path('module', 'powrweather') . '/js/plugins/powrweather/icons/weather.png';
    $powr_icon = drupal_get_path('module', 'powrweather') . '/js/plugins/powrweather/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_weather' => [
        'label' => t('POWr Weather'),
        'image' => $powr_weather_icon,
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
