<?php

namespace Drupal\powrpaypalbutton\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrpaypalbutton" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrpaypalbutton",
 *   label = @Translation("powrpaypalbutton Plugin")
 * )
 */
class powrpaypalbutton extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrpaypalbutton') . '/js/plugins/powrpaypalbutton/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_paypalbutton_icon = drupal_get_path('module', 'powrpaypalbutton') . '/js/plugins/powrpaypalbutton/icons/paypalbutton.png';
    $powr_icon = drupal_get_path('module', 'powrpaypalbutton') . '/js/plugins/powrpaypalbutton/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_paypalbutton' => [
        'label' => t('POWr PayPal Button'),
        'image' => $powr_paypalbutton_icon,
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
