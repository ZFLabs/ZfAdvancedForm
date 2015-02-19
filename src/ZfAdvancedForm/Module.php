<?php
namespace ZfAdvancedForm;

use Zend\ModuleManager\Feature\FormElementProviderInterface;

class Module implements FormElementProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getFormElementConfig()
    {
        return array(
            'invokables' => array(
                'Select2' => 'ZfAdvancedForm\Form\Element\Select2'
            )
        );
    }

    public function getViewHelperConfig()
    {
        return array(
            'invokables' => array(
                'select2Row' => 'ZfAdvancedForm\Form\View\Helper\FormRow\Select2Row'
            ),
        );
    }
}
