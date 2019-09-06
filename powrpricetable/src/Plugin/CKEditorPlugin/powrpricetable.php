<?php

namespace Drupal\powrpricetable\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrpricetable" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrpricetable",
 *   label = @Translation("powrpricetable Plugin")
 * )
 */
class powrpricetable extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrpricetable') . '/js/plugins/powrpricetable/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_pricetable_icon = drupal_get_path('module', 'powrpricetable') . '/js/plugins/powrpricetable/icons/pricetable.png';
    $powr_icon = drupal_get_path('module', 'powrpricetable') . '/js/plugins/powrpricetable/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_pricetable' => [
        'label' => t('POWr Price Table'),
        'image' => $powr_pricetable_icon,
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
