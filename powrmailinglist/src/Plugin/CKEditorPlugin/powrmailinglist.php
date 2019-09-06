<?php

namespace Drupal\powrmailinglist\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "powrmailinglist" plugin, with a CKEditor.
 *
 * @CKEditorPlugin(
 *   id = "powrmailinglist",
 *   label = @Translation("powrmailinglist Plugin")
 * )
 */
class powrmailinglist extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'powrmailinglist') . '/js/plugins/powrmailinglist/plugin.js';
  }

  /**
   * @return array
   */
  public function getButtons() {
    $powr_mailinglist_icon = drupal_get_path('module', 'powrmailinglist') . '/js/plugins/powrmailinglist/icons/mailinglist.png';
    $powr_icon = drupal_get_path('module', 'powrmailinglist') . '/js/plugins/powrmailinglist/icons/powr.png';

    return [
      'powr_apps_dropdown' => [
        'label' => t('POWr Plugins'),
        'image' => $powr_icon,
      ],
      'powr_mailinglist' => [
        'label' => t('POWr Mailing List'),
        'image' => $powr_mailinglist_icon,
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
