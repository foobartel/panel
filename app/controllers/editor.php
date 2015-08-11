<?php

class EditorController extends Kirby\Panel\Controller {

  public function link($pageId, $textarea = null) {

    $page = $this->page($pageId);
    $form = $this->form('editor/link', array($page, $textarea));

    return $this->modal('editor/link', compact('form'));

  }

  public function email($pageId, $textarea) {
    
    $page = $this->page($pageId);
    $form = $this->form('editor/email', array($page, $textarea));

    return $this->modal('editor/email', compact('form'));

  }

}