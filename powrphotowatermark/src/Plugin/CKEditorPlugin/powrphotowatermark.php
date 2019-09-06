<?php

namespace Drupal\powrphotowatermark\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrphotowatermark" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrphotowatermark",
 *   label = @Translation("powrphotowatermark Plugin")
 * )
 */
class powrphotowatermark extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrphotowatermark') . '/js/plugins/powrphotowatermark/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_photowatermark_icon = drupal_get_path('module', 'powrphotowatermark') . '/js/plugins/powrphotowatermark/icons/photowatermark.png';
    $powr_icon = drupal_get_path('module', 'powrphotowatermark') . '/js/plugins/powrphotowatermark/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_photowatermark' => [
        'label' => t('POWr Photo Watermark'),
        'image' => $powr_photowatermark_icon,
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
