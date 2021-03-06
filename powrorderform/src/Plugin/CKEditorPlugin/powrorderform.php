<?php

namespace Drupal\powrorderform\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrorderform" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrorderform",
 *   label = @Translation("powrorderform Plugin")
 * )
 */
class powrorderform extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrorderform') . '/js/plugins/powrorderform/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_orderform_icon = drupal_get_path('module', 'powrorderform') . '/js/plugins/powrorderform/icons/orderform.png';
    $powr_icon = drupal_get_path('module', 'powrorderform') . '/js/plugins/powrorderform/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_orderform' => [
        'label' => t('POWr Order Form'),
        'image' => $powr_orderform_icon,
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
