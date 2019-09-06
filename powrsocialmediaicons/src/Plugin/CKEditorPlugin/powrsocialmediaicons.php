<?php

namespace Drupal\powrsocialmediaicons\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrsocialmediaicons" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrsocialmediaicons",
 *   label = @Translation("powrsocialmediaicons Plugin")
 * )
 */
class powrsocialmediaicons extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrsocialmediaicons') . '/js/plugins/powrsocialmediaicons/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_socialmediaicons_icon = drupal_get_path('module', 'powrsocialmediaicons') . '/js/plugins/powrsocialmediaicons/icons/socialmediaicons.png';
    $powr_icon = drupal_get_path('module', 'powrsocialmediaicons') . '/js/plugins/powrsocialmediaicons/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_socialmediaicons' => [
        'label' => t('POWr Social Media Icons'),
        'image' => $powr_socialmediaicons_icon,
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
