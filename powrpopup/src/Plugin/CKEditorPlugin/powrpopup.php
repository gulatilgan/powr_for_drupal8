<?php

namespace Drupal\powrpopup\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrpopup" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrpopup",
 *   label = @Translation("powrpopup Plugin")
 * )
 */
class powrpopup extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrpopup') . '/js/plugins/powrpopup/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_popup_icon = drupal_get_path('module', 'powrpopup') . '/js/plugins/powrpopup/icons/popup.png';
    $powr_icon = drupal_get_path('module', 'powrpopup') . '/js/plugins/powrpopup/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_popup' => [
        'label' => t('POWr Popup'),
        'image' => $powr_popup_icon,
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
