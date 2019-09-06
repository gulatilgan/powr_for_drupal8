<?php

namespace Drupal\powremaillistsignup\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powremaillistsignup" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powremaillistsignup",
 *   label = @Translation("powremaillistsignup Plugin")
 * )
 */
class powremaillistsignup extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powremaillistsignup') . '/js/plugins/powremaillistsignup/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_emaillistsignup_icon = drupal_get_path('module', 'powremaillistsignup') . '/js/plugins/powremaillistsignup/icons/emaillistsignup.png';
    $powr_icon = drupal_get_path('module', 'powremaillistsignup') . '/js/plugins/powremaillistsignup/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_emaillistsignup' => [
        'label' => t('POWr Email List Signup'),
        'image' => $powr_emaillistsignup_icon,
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
