<?php


class Tx_Emf_Controller_AbstractBackendController extends Tx_Extbase_MVC_Controller_ActionController{


    
    /**
     * @var string Key of the extension this controller belongs to
     */
    protected $extensionName = 'Emf';

    /**
     * @var t3lib_PageRenderer
     */
    protected $pageRenderer;



    /**
     * @var integer
     */
    protected $pageId;



    /**
     * Initializes the controller before invoking an action method.
     *
     * @return void
     */
    protected function initializeAction() {
        // @todo Evaluate how the intval() call can be used with Extbase validators/filters
        $this->pageId = intval(t3lib_div::_GP('id'));
        $this->pageRenderer->addInlineLanguageLabelFile('EXT:emf/Resources/Private/Language/locallang.xml');
    }




    /**
     * Processes a general request. The result can be returned by altering the given response.
     *
     * @param Tx_Extbase_MVC_RequestInterface $request The request object
     * @param Tx_Extbase_MVC_ResponseInterface $response The response, modified by this handler
     * @throws Tx_Extbase_MVC_Exception_UnsupportedRequestType if the controller doesn't support the current request type
     * @return void
     */
    public function processRequest(Tx_Extbase_MVC_RequestInterface $request, Tx_Extbase_MVC_ResponseInterface $response) {
        $this->template = t3lib_div::makeInstance('template');
        $this->pageRenderer = $this->template->getPageRenderer();

        $GLOBALS['SOBE'] = new stdClass();
        $GLOBALS['SOBE']->doc = $this->template;

        parent::processRequest($request, $response);

        $pageHeader = $this->template->startpage(
            $GLOBALS['LANG']->sL('LLL:EXT:emf/Resources/Private/Language/locallang.xml:module.title')
        );
        $pageEnd = $this->template->endPage();

        $response->setContent($pageHeader . $response->getContent() . $pageEnd);
    }    




	
}




?>
