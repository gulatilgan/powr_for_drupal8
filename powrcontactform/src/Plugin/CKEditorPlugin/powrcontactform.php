<?php

namespace Drupal\powrcontactform\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrcontactform" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrcontactform",
 *   label = @Translation("powrcontactform Plugin")
 * )
 */
class powrcontactform extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrcontactform') . '/js/plugins/powrcontactform/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_contactform_icon = drupal_get_path('module', 'powrcontactform') . '/js/plugins/powrcontactform/icons/contactform.png';
    $powr_icon = drupal_get_path('module', 'powrcontactform') . '/js/plugins/powrcontactform/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_contactform' => [
        'label' => t('POWr Contact Form'),
        'image' => $powr_contactform_icon,
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
