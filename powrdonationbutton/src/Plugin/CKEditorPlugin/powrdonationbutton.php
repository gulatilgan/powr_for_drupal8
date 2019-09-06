<?php

namespace Drupal\powrdonationbutton\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrdonationbutton" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrdonationbutton",
 *   label = @Translation("powrdonationbutton Plugin")
 * )
 */
class powrdonationbutton extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrdonationbutton') . '/js/plugins/powrdonationbutton/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_donationbutton_icon = drupal_get_path('module', 'powrdonationbutton') . '/js/plugins/powrdonationbutton/icons/donationbutton.png';
    $powr_icon = drupal_get_path('module', 'powrdonationbutton') . '/js/plugins/powrdonationbutton/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_donationbutton' => [
        'label' => t('POWr Donation Button'),
        'image' => $powr_donationbutton_icon,
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
