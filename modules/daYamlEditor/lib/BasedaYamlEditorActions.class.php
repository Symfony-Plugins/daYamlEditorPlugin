<?php

/**
 * Base actions for the daYamlEditorPlugin daYamlEditor module
 * 
 * @package     daYamlEditorPlugin
 * @author      dalexandre
 */
abstract class BasedaYamlEditorActions extends sfActions
{
  /**
   * Index action only handle and save a form
   * @param sfWebRequest $request
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new daYamlEditorForm();

    if ($request->isMethod('post'))
    {
      $this->form->bind(
        $request->getParameter($this->form->getName())
      );
      if ($this->form->isValid())
      {
        if ($this->form->save())
        {
          $this->getUser()->setFlash('notice', "Configuration edited succesfully", true);
          $this->redirect('daYamlEditor/index');
        }
      }
    }
  }
}
