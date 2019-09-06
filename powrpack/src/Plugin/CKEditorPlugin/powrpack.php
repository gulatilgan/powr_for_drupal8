<?php

namespace Drupal\powrpack\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrpack" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrpack",
 *   label = @Translation("powrpack Plugin")
 * )
 */
class powrpack extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrpack') . '/js/plugins/powrpack/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_pack_icon = drupal_get_path('module', 'powrpack') . '/js/plugins/powrpack/icons/pack.png';
    $powr_icon = drupal_get_path('module', 'powrpack') . '/js/plugins/powrpack/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_pack' => [
        'label' => t('POWr Pack'),
        'image' => $powr_pack_icon,
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
